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

Route::get('/Inicio','InicioController@show');

Route::get('/Registro','RegistroController@show');

Route::get('/Login','LoginController@show');

Route::get('/Nosotros','NosotrosController@show');

Route::get('/PreguntasFrecuentes','PreguntasController@show');

Route::get('/ReglasDeJuego','ReglasDeJuegoController@show');
