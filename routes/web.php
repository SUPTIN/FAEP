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



Route::get('informacao', 'FaepController@informacao');
Route::get('logs', 'FaepController@viewLog');

Route::get('listaAvaliados', 'FaepController@viewListaAvaliar');

Route::get('listaAvaliadores', 'FaepController@viewListaAvaliadores');


Route::get('/', function () {
    return view('welcome');
});