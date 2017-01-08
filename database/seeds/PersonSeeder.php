<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(\App\Person::class, 60)->create();
	}
}
