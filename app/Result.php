<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Result
 *
 * @property integer $id
 * @property integer $team_id_0
 * @property integer $team_id_1
 * @property string result
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $team_0
 * @property \Illuminate\Database\Eloquent\Collection $team_1
 */
class Result extends Model {

	use SoftDeletes;

	protected $fillable = ['team_id_0', 'team_id_1', 'results'];

	protected $dates = ['created_at', 'updated_at', 'deleted_at'];

	/**
	 * Returns first team
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function team_0() {
		return $this->belongsTo('App\Team', 'team_id_0', 'id');
	}

	/**
	 * Returns second team
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function team_1() {
		return $this->belongsTo('App\Team', 'team_id_1', 'id');
	}

}
