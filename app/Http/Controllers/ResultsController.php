<?php

namespace App\Http\Controllers;

use App\Result;
use App\Team;
use Illuminate\Http\Request;

class ResultsController extends Controller {

	/**
	 * Display a listing of results.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('results.index', ['results' => Result::orderBy('created_at', 'desc')->get(), 'teams' => Team::all()]);
	}

	/**
	 * Store a newly created result in database.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$this->validate($request, [
			'results' => 'required|max:255'
		]);

		$results = $request->get('results');

		$team_0 = $request->get('team_0');
		$team_1 = $request->get('team_1');

		Result::create(['team_id_0' => $team_0, 'team_id_1' => $team_1, 'results' => $results]);

		return json_encode(['success' => true]);
	}

	/**
	 * Update a result in database.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request) {

		$this->validate($request, [
			'id' => 'required|exists:results',
			'results' => 'required|max:255'
		]);

		$id = $request->get('id');

		$results = $request->get('results');

		$team_0 = $request->get('team_0');
		$team_1 = $request->get('team_1');

		$Result = Result::find($id);

		$Result->team_id_0 = $team_0;
		$Result->team_id_1 = $team_1;
		$Result->results = $results;

		$Result->save();

		return json_encode(['success' => true]);
	}

}
