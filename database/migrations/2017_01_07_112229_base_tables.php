<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class BaseTables extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('teams', function (Blueprint $t) {
			$t->increments('id');

			$t->string('name');

			$t->timestamps();
			$t->softDeletes();
		});

		Schema::create('people', function (Blueprint $t) {
			$t->increments('id');

			$t->string('name');
			$t->string('surname');
			$t->string('type');

			$t->integer('team_id')->unsigned()->index()->nullable();
			$t->foreign('team_id')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');

			$t->timestamps();
			$t->softDeletes();
		});

		Schema::create('results', function (Blueprint $t) {
			$t->increments('id');

			$t->integer('team_id_0')->unsigned()->index();
			$t->foreign('team_id_0')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');

			$t->integer('team_id_1')->unsigned()->index();
			$t->foreign('team_id_1')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');

			$t->string('results');

			$t->timestamps();
			$t->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('results');
		Schema::drop('people');
		Schema::drop('teams');
	}
}
