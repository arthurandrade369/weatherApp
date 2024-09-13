<?php

namespace App\Http\Controllers;

use App\Facades\GeocodingApi;
use Illuminate\Http\Request;

class GeocodingApiController extends Controller
{
    function getGeocode(Request $request)
    {
        dump('/direct?q=' . $request->query . '&limit=5&appid=' . env('WEATHER_API_KEY'));
        $response = GeocodingApi::get('/direct?q=' . $request->query . '&limit=5&appid=' . env('WEATHER_API_KEY'))->json();

        $json = '';

        $response = json_decode($json);
        return response()->json($response);
    }

    function getCity(Request $request)
    {
        $response = GeocodingApi::get('/reverse?lat=' . $request->lat . '&lon=' . $request->lon . '&appid=' . env('WEATHER_API_KEY'))->json();

        return response()->json($response);
    }
}
