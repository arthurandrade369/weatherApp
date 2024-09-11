<?php

namespace App\Http\Controllers;

use App\Facades\WeatherApi;

class WeatherApiController extends Controller
{
    // public function __invoke()
    // {
    //     return WeatherApi::get('/posts')->json();
    // }

    public function index()
    {
        $data = WeatherApi::get('/posts')->json();
        $collection = collect($data)->all();
        return view('weather', ['data' => $collection]);
    }
}
