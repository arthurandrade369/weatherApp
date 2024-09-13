<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class GeocodingApiProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('geocode-api', function () {
            return Http::withOptions([
                'verify' => false,
                'base_uri' => 'http://api.openweathermap.org/geo/1.0/direct?appid='.env('WEATHER_API_KEY'),
            ]);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
