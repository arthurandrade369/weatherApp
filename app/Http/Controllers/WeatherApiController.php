<?php

namespace App\Http\Controllers;

use App\Facades\WeatherApi;
use Illuminate\Http\Request;

class WeatherApiController extends Controller
{
   public function index()
   {
      return view('weather.index');
   }

   public function show($lat, $lon)
   {
      return view('weather.show', ['lat' => $lat, 'lon' => $lon]);
   }

   public function weatherByLocation(Request $request)
   {
      $response = WeatherApi::get('/weather?lat=' . $request->lat . '&lon=' . $request->lon . '&appid=' . env('WEATHER_API_KEY'))->json();
      return response($response);
   }
}
