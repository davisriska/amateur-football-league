<?php

namespace App\Http\Controllers;

use App\Person;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PeopleController extends Controller {

	/**
	 * Display a listing of people.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$orderBy = Input::get('order_by');
		$direction = Input::get('direction');

		if ($orderBy && $direction) {
			$people = Person::orderBy($orderBy, $direction)->get();
		} else {
			$people = Person::all();
		}

		return view('people.index', ['people' => $people, 'teams' => Team::orderBy('name')->get()]);
	}

	/**
	 * Store a newly created person in database.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$this->validate($request, [
			'name' => 'required|max:255',
			'surname' => 'required|max:255'
		]);

		$name = $request->get('name');
		$surname = $request->get('surname');
		$type = $request->get('type');
		$team = $request->get('team');

		if ($team == 'null') {
			Person::create(['name' => $name, 'surname' => $surname, 'type' => $type, 'team_id' => null]);
		} else {
			Person::create(['name' => $name, 'surname' => $surname, 'type' => $type, 'team_id' => $team]);
		}

		return json_encode(['success' => true]);

	}

	/**
	 * Update a person in database.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request) {

		$this->validate($request, [
			'name' => 'required|max:255',
			'surname' => 'required|max:255'
		]);

		$person = Person::find($request->get('id'));

		if ($person) {
			$person->name = $request->get('name');
			$person->surname = $request->get('surname');
			$person->type = $request->get('type');

			$team = $request->get('team');
			$person->team_id = ($team == 'null') ? null : $team;
		}

		$person->save();

		return json_encode(['success' => true]);
	}

}
