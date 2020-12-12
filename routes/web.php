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
    return view('entrenador');
});

Route::get('/entrenador', function () {
    return view('entrenador');
});

Route::get('/entrenar', function () {
    return view('entrenar');
});

Route::get('/tyc', function () {
    return view('tyc');
});

Route::post('/contacto', 'ContactoController@store');
Route::post('/lead', 'LeadController@store');
