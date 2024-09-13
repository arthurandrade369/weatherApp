<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class GeocodingApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'geocoding-api';
    }
}