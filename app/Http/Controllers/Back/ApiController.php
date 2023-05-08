<?php

namespace App\Http\Controllers\Back;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getRegions(){
        //http://dataservice.accuweather.com/locations/v1/regions


        $response = Http::get('http://dataservice.accuweather.com/locations/v1/regions');
        dd($response);
    }
}
