<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    //

    private $weatherService;
    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }


    public function getWeather(Request $request){

        $city =$request->input('city','Landon');

        $weatherData = $this->weatherService->getWeather($city);
        if(isset($weatherData['error'])){
            return response()->json(['error' => $weatherData['error']],500);
        }
        
 
        return response()->json([
            'city'=> $weatherData['city'],
            'temperature'=>$weatherData['temperature'],
            'description' =>ucfirst($weatherData['description']),
            'humidity' => $weatherData['humidity'] .'%',
            'wind_speed' => $weatherData['wind_speed'] .' m/s'
        ]);


        // return response()->json([
        //     'city'=> $weatherData['name'],
        //     'temperature'=>$weatherData['main']['temp'],
        //     'description' =>ucfirst($weatherData['weather'][0]['description']),
        //     'humidity' => $weatherData['main']['humidity'] .'%',
        //     'wind_speed' => $weatherData['wind']['speed'] .' m/s'
        // ]);
    }
}
