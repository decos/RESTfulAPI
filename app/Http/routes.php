<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
/*
Route::get('/', 'MyController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

//Route::resource('vehiculos','VehiculoController');

//Sale de la filosofia REST
Route::get('/','VehiculoController@showAll');
//REST
Route::resource('fabricantes','FabricanteController');
Route::resource('fabricantes.vehiculos','VehiculoController');