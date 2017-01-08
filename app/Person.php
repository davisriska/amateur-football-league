<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Person
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $type
 * @property integer $team_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $team
 */
class Person extends Model {

	use SoftDeletes;

	protected $table = 'people';

	protected $fillable = ['name', 'surname', 'type', 'team_id'];

	protected $dates = ['created_at', 'updated_at', 'deleted_at'];

	/**
	 * Returns persons full name
	 *
	 * @return string
	 */
	public function getFullName() {
		return $this->name . ' ' . $this->surname;
	}

	/**
	 * Returns team name, if part of a team. If not the returns "None"
	 *
	 * @return string
	 */
	public function getTeamName() {
		if ($this->team_id) {
			return $this->team->name;
		} else {
			return 'None';
		}
	}

	/**
	 *
	 * Returns team, which is part of
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function team() {
		return $this->belongsTo('App\Team', 'team_id', 'id');
	}

}
