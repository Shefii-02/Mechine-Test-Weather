<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/electronics',[ProductController::class,'showElectronics']);

Route::get('/weather',[WeatherController::class,'getWeather']);