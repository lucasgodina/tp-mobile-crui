<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\EquipoController;
// use App\Models\Juego;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para el CRUD de Juegos
//Route::get('/juegos', 'JuegoController@index')->name('juegos.index');

// Definir todas las rutas para el CRUD de Juegos
//Route::resource('juegos', 'JuegoController');
Route::resource('juegos', JuegoController::class);

// Definir todas las rutas para el CRUD de Equipos
Route::resource('equipos', EquipoController::class);
