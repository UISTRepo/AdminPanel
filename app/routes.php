<?php

Route::get('/test', function(){

	$transporters = Transporter::all();

	$cities = City::all();

	$trips = Trip::all();

	$filter_trips = Trip::where('transporter_id',1)
		->where('city_id',2)
		->orderBy('price','asc')->get();

	return View::make('test')
		->with('trips', $trips)
		->with('transporters',$transporters)
		->with('cities',$cities)
		->with('filter_trips',$filter_trips);

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
	'as'=>'login',
	'uses'=>'LoginController@getLogin'
))->before('guest');

/* ----- USER LOGIN LOGOUT ----- */

// GET login
Route::get('/login', array(
	'as'=>'login',
	'uses'=>'LoginController@getLogin'
))->before('guest');

//POST login
Route::post('/login', array(
	'as'=>'login-post',
	'uses'=>'LoginController@postLogin'
))->before('csrf');

Route::get('/logout', array(
	'as'=>'logout',
	'uses'=>'LoginController@getLogout'
))->before('auth');

Route::get('/main', array(
	'as' => 'main',
	'uses' => 'HomeController@getIndex'
))->before('auth');

/* ----- API for XXX ----- */

Route::group(array('before'=>'auth'), function(){

	Route::group(['prefix' => 'api'], function(){

		Route::resource('transporter', 'TransporterController');
		Route::resource('destination', 'DestinationController');
		Route::resource('city', 'CityController');
		Route::resource('trip', 'TripController');
		Route::resource('image', 'ImageController');

	});

});