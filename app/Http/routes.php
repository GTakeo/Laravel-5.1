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

Route::get('/inicio','UserController@get_inicio');
Route::post('/inicio','UserController@post_inicio');

Route::get('/somos','UserController@get_somos');


Route::get('/ubicacion','UserController@get_ubicacion');


Route::get('/contactenos','UserController@get_contactenos');
Route::post('/contactenos','UserController@post_contactenos');


//Route::get('/catalogo','UserController@get_catalogo');

Route::get('/catalogo', 'CatalogoController@get_catalogo');
Route::post('/catalogo', 'CatalogoController@post_catalogo');



Route::get('/registrarse','UserController@get_regitrarse');
Route::post('/registrarse','UserController@post_regitrarse');


Route::get('/detalleventa','UserController@get_detalleventa');


Route::get('/validarpagos','UserController@get_validarpagos');
Route::post('/validarpagos','UserController@post_validarpagos');


Route::get('/enviarimagen','UserController@get_enviarmensaje');
Route::post('/enviarimagen','UserController@post_enviarmensaje');