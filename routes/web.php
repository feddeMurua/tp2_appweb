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
    return view('inicio');
});

Route::resource('entities','EntityController');

Route::get('/ObjectState/index', 'ObjectStateController@index');
Route::get('/ObjectState/crear', 'ObjectStateController@create');
Route::get('/ObjectState/guardar', 'ObjectStateController@store');
Route::get('/ObjectState/mostrar', 'ObjectStateController@show');
Route::get('/ObjectState/editar', 'ObjectStateController@edit');
Route::get('/ObjectState/actualizar', 'ObjectStateController@update');
Route::get('/ObjectState/borrar', 'ObjectStateController@destroy');