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


Route::get('secretarias', 'SecretariaController@viewListaSec');
Route::get('novaSecretaria', 'SecretariaController@viewFormSecretaria');
Route::post('addSecretaria', 'SecretariaController@addNovaSecretaria');
Route::get('{id}/viewSecretaria', 'SecretariaController@viewSecretaria');
Route::get('{id}/editSecretaria', 'SecretariaController@viewFormEditSecretaria');
Route::post('{id}/updateSecretaria', 'SecretariaController@atualizaSecretaria');

Route::get('{id}/novoAvaliador', 'AvaliadorController@viewFormAvaliador');
Route::post('{id}/addAvaliador', 'AvaliadorController@addAvaliador');
Route::get('{id}/editAvaliador', 'AvaliadorController@editFormAvaliador');
Route::post('{id}/updateAvaliador', 'AvaliadorController@atualizaAvaliador');

Route::get('{id}/novoLocalTrab', 'SecretariaController@viewFormLocalTrab');
Route::post('{id}/addLocalTrab', 'SecretariaController@addNovoLocalTrab');
Route::get('{id}/editLocalTrab', 'SecretariaController@editFormLocalTrab');
Route::post('{id}/updateLocalTrab', 'SecretariaController@atualizaLocalTrab');


Route::get('periodos', 'PeriodoController@viewListaPeriodos');
Route::get('novoPeriodo', 'PeriodoController@viewFormPeriodos');
Route::post('addPeriodo', 'PeriodoController@addNovoPeriodoAva');
Route::get('{id}/editPeriodo', 'PeriodoController@viewFormEditPeriodo');
Route::post('{id}/updatePeriodo', 'PeriodoController@atualizaPeriodoAva');


Route::get('/', function () {
    return view('welcome');
});