<?php

use App\Http\Controllers\WeatherApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WeatherApiController::class, 'index'])->name('index');
Route::post('/{cidade}', [WeatherApiController::class, 'show'])->name('show');
Route::post('/localizacao', [WeatherApiController::class, 'localizacao'])->name('localizacao');
