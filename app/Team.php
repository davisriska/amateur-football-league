<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Team
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $people
 * @property \Illuminate\Database\Eloquent\Collection $results_as_team_0
 * @property \Illuminate\Database\Eloquent\Collection $results_as_team_1
 *
 */
class Team extends Model {

	use SoftDeletes;

	protected $fillable = ['name'];

	protected $dates = ['created_at', 'updated_at', 'deleted_at'];

	/**
	 * Returns people that are in the team, as in Trainers and Players
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function people() {
		return $this->hasMany('App\Person', 'team_id', 'id');
	}


	/**
	 * Returns results, when entered as the first team
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function results_as_team_0() {
		return $this->hasMany('App\Result', 'team_0', 'id');
	}

	/**
	 * Returns results, when entered as the second team
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function results_as_team_1() {
		return $this->hasMany('App\Result', 'team_1', 'id');
	}

}
