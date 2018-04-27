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

Route::get('aceite', 'AvaliarController@viewAceite');
Route::get('listaAvaliados', 'AvaliarController@viewListaAvaliar');

Route::get('listaAvaliadores', 'AvaliadorController@viewListaAvaliadores');

Route::get('periodos', 'PeriodoController@viewListaPeriodos');
Route::get('novoPeriodo', 'PeriodoController@viewFormPeriodos');
Route::post('addPeriodo', 'PeriodoController@addNovoPeriodoAva');


Route::get('/', function () {
    return view('welcome');
});