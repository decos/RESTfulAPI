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

Route::get('/', 'WelcomeController@index');
/*
Route::get('/', 'MyController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

//Route::resource('vehiculos','VehiculoController');

//Sale de la filosofia REST (no es correcto)
//Route::get('/','VehiculoController@showAll');

//REST
Route::resource('vehiculos', 'VehiculoController', array('only' => array('index', 'show')));
Route::resource('fabricantes','FabricanteController', array('except' => array('edit', 'create')));
Route::resource('fabricantes.vehiculos','FabricanteVehiculoController', array('except' => array('show', 'edit' , 'create')));

// Agregar un control de rutas inexistentes
// Agregar un patron y pintarlo como una expresion regular que va coincidir con ello

// Punto significa que va coincidir letras, numeros, caracteres
// Asterisco se va repetir 0 a muchas veces
Route::pattern('inexistentes', '.*');

// Any significa que va coincidir con cualquier otro ruta, recurso, metodo
// Codigo 400 BAD REQUEST
Route::any('/{inexistentes}', function(){
	return response()->json(
		array(
                'mensaje' => 'Ruta o metodos incorrectos.', 
                'codigo' => 400), 
	400);
});









