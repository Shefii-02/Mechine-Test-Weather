<?php

namespace App\Http\Controllers\Api;

use App\Services\WeatherService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Weather;

class WeatherController extends Controller
{

    public function getWeather(Request $request){
        if($request->has('appid') && $request->appid == 'b4441447c3d8596e27dccdfbddab5728'){
            if($request->has('city')){
                $city = $request->city;
                $cityWeather = Weather::where('city',$city)->first();
                if($cityWeather){
                    return response()->json([
                        'city'=> $cityWeather->city,
                        'temperature'=>$cityWeather->temperature,
                        'description' =>ucfirst($cityWeather->description),
                        'humidity' => $cityWeather->humidity .'%',
                        'wind_speed' => $cityWeather->wind_speed .' m/s',
                        'status' => '200'
                    ]);
                }
                else{
                    return response()->json(['response'=>'City not found. please try another city','status' =>'404'],404);
                }
            }
            else{
                return response()->json(['response'=>'Fill city name','status' =>'500'],500);
            }
        }
        else{
            return response()->json(['response'=>'API Key not Matched','status' =>'500'],500);
        }

    }

}