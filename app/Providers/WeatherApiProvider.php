<?php

namespace App\Providers;

use App\Helpers\WeatherApi;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class WeatherApiProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('weather-api', function () {
            return Http::withOptions([
                'verify' => false,
                'base_uri' => 'https://jsonplaceholder.typicode.com',
            ])->withHeaders([
                'Authorization' => env('WEATHER_API_KEY'),
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
