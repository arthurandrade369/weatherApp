<?php

namespace App\Http\Controllers;

use App\Facades\GeocodingApi;
use Illuminate\Http\Request;

class GeocodingApiController extends Controller
{
    function getGeocode(Request $request)
    {
        $response = GeocodingApi::get(`q={$request->city}&limit=5`)->json();
        return response()->json($response);
    }
}
