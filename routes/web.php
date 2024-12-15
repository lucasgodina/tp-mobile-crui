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
//Route::resource('juegos', 'JuegoController'); en lugar de usar get usamos resource para el CRUD de Juegos
Route::resource('juegos', JuegoController::class);

// Definir todas las rutas para el CRUD de Equipos. En lugar de usar el ger se usa resource para simplificar y no hacer un get para cada controlador
Route::resource('equipos', EquipoController::class);
