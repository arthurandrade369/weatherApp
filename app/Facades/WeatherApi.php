<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class WeatherApi extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'weather-api';
    }
}