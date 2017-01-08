<?php

namespace App\Http\Controllers;

use App\Person;
use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller {

	/**
	 * Displays a listing of teams.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('teams.index', ['teams' => Team::orderBy('name')->get()]);
	}

	/**
	 * Shows the form for creating a new team.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('teams.create', ['trainers' => Person::where('type', 'trainer')->orderBy('surname')->get(), 'players' => Person::where('type', 'player')->get()]);
	}

	/**
	 * Store a newly created team in database.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$this->validate($request, [
			'name' => 'required|max:255'
		]);

		$name = $request->get('name');
		$trainers = $request->get('trainers', []);
		$players = $request->get('players', []);

		$newTeam = Team::create(['name' => $name]);

		foreach ($trainers as $trainer) {
			$newTeam->people()->save(Person::find($trainer));
		}

		foreach ($players as $player) {
			$newTeam->people()->save(Person::find($player));
		}

		return redirect()->route('teams@index');
	}

	/**
	 * Show the form for editing a team.
	 *
	 * @param  \App\Team $team
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Team $team) {
		return view('teams.edit', ['team' => $team, 'trainers' => Person::where('type', 'trainer')->get(), 'players' => Person::where('type', 'player')->get()]);
	}

	/**
	 * Update a team in database.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Team $team
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Team $team) {

		$this->validate($request, [
			'name' => 'required|max:255'
		]);

		$team->name = $request->get('name');

		$trainers = $request->get('trainers', []);
		$players = $request->get('players', []);

		$team->people()->update(['team_id' => null]);

		foreach ($trainers as $trainer) {
			$team->people()->save(Person::find($trainer));
		}

		foreach ($players as $player) {
			$team->people()->save(Person::find($player));
		}

		$team->save();

		return redirect()->route('teams@index');
	}

}
