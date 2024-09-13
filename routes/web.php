<?php

use App\Http\Controllers\GeocodingApiController;
use App\Http\Controllers\WeatherApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WeatherApiController::class, 'index'])->name('index');
Route::post('/{cidade}', [WeatherApiController::class, 'show'])->name('show');
Route::post('/weather', [WeatherApiController::class, 'weatherByLocation'])->name('weather');
Route::post('/geocode', [GeocodingApiController::class, 'getGeoCode'])->name('geocode');
