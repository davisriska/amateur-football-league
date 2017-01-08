<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
	static $password;

	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password' => $password ?: $password = bcrypt('secret'),
		'remember_token' => str_random(10),
	];
});

$factory->define(\App\Team::class, function (\Faker\Generator $faker) {

	return [
		'name' => $faker->name
	];

});

$factory->define(\App\Person::class, function (\Faker\Generator $faker) {

	if (mt_rand(0, 100) > 10) {
		$type = 'player';
	} else {
		$type = 'trainer';
	}

	return [
		'name' => $faker->firstName,
		'surname' => $faker->lastName,
		'type' => $type,
		'team_id' => mt_rand(1, \App\Team::all()->count())
	];

});

$factory->define(\App\Result::class, function (\Faker\Generator $faker) {

	return [
		'team_id_0' => mt_rand(1, \App\Team::all()->count()),
		'team_id_1' => mt_rand(1, \App\Team::all()->count()),
		'results' => mt_rand(1, 10) . ':' . mt_rand(1, 10)
	];

});