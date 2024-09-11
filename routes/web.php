<?php

use App\Http\Controllers\WeatherApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/up', WeatherApiController::class);