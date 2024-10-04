<?php

use App\Http\Controllers\GeocodingApiController;
use App\Http\Controllers\WeatherApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WeatherApiController::class, 'index'])->name('index');
Route::post('/weather', [WeatherApiController::class, 'weatherByLocation'])->name('weather');
Route::post('/geocode', [GeocodingApiController::class, 'getGeoCode'])->name('geocode');
Route::post('/city', [GeocodingApiController::class, 'getCity'])->name('city');
Route::get('/app', function () {
    return view('app');
});
Route::get('/city/{lat}/{lon}', [WeatherApiController::class, 'show'])->name('show');
