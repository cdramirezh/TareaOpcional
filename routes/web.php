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
    return view('welcome');
});

Route::get('/A765', 'VehiculoModelController@index');
Route::get('/A765/Registrar_Vehiculos', 'VehiculoModelController@create');
Route::get('/A765/Listar_Vehiculos', 'VehiculoModelController@show');
Route::get('/A765/Estadisticos_Vehiculos', 'VehiculoModelController@estadisticos');
Route::resource('vehiculo', 'VehiculoModelController');
