<?php

use App\Http\Controllers\Api\WeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get-weather', [WeatherController::class,'getWeather']);
