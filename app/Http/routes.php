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
/*hello world*/
// Route::get('/', function () {
//     return 'Hello World';
// });
/*Parametros*/
Route::get('nombre/{name?}', function ($nombre = 'Junior') {
    return 'Mi nombre es: '.$nombre;
});
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('controlador/', 'PruebaController@index');
Route::get('name/{name}', 'PruebaController@name');


// Controllers Restfull
// 
Route::resource('movie', 'MovieController');

Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('review', 'FrontController@review');


Route::resource('usuario', 'UsuarioController');

// Auth
Route::resource('log', 'LogController');
Route::resource('logout', 'LogController@logout');






