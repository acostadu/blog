<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
	return 'En la raiz de Laravel';
});

Route::get('/foo', function () {
    return 'Hello World';
});

Route::get('/info', function () {
	echo phpinfo();
});

Route::get('/usuarios', 'UserController@index');

/*Route::get('/usuarios', function() {
	return 'Esto es la ruta de Usuarios';
});*/

Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+');

/*Route::get('/usuarios/{id}', function($id) {
	return 'Mostrando detalles del usuario: '.$id;
})->where('id', '[0-9]+');*/

Route::get('/usuarios/{id}/{name}', function($id, $name) {

	if ($name) {
		return 'Mostrando detalles del usuario con ID: '.$id.' y NAME: '.$name ;	
	} else {
		return 'Mostrando detalles del usuario con ID: '.$id.' y no tiene NAME';	
	}
	
});