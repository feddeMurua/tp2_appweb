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
Route::resource('accidentes','AccidenteController');
Route::resource('robos','RoboController');
Route::resource('incendios','IncendioController');

