<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'auth'], function () {

	Route::get('/', 'HomeController@index');

	Route::group(['prefix' => 'people'], function () {
		Route::get('/', 'PeopleController@index')->name('people@index');
		Route::post('/store', 'PeopleController@store')->name('people@store');
		Route::post('/update', 'PeopleController@update')->name('people@update');
	});

	Route::group(['prefix' => 'results'], function () {
		Route::get('/', 'ResultsController@index')->name('results@index');
		Route::post('/store', 'ResultsController@store')->name('results@store');
		Route::post('/update', 'ResultsController@update')->name('results@update');
	});

	Route::group(['prefix' => 'teams'], function () {
		Route::get('/', 'TeamsController@index')->name('teams@index');
		Route::get('/create', 'TeamsController@create')->name('teams@create');
		Route::post('/store', 'TeamsController@store')->name('teams@store');
		Route::get('/edit/{team}', 'TeamsController@edit')->name('teams@edit');
		Route::post('/update/{team}', 'TeamsController@update')->name('teams@update');

	});

	Route::get('logout', 'Auth\LoginController@logout');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
