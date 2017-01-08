<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		\App\User::create([
			'name' => 'admin',
			'email' => 'admin@admin.com',
			'password' => Hash::make('admin123')
		]);

		$this->call(TeamSeeder::class);
		$this->call(PersonSeeder::class);
		$this->call(ResultSeeder::class);
	}
}
