<?php

use App\Http\Controllers\WeatherApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WeatherApiController::class, 'index'])->name('index');
Route::post('/', [WeatherApiController::class, 'show'])->name('show');
Route::post('/salvar-localizacao', [WeatherApiController::class, 'salvarLocalizacao'])->name('salvar.localizacao');
