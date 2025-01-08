<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeatherData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('weather')->insert(
            [
                ['city' => 'Landon', 'temperature' => '15', 'description' => 'Cloudy','humidity' => '78', 'wind_speed' => '5'],
                ['city' => 'Paris', 'temperature' => '20', 'description' => 'Sunny','humidity' => '60', 'wind_speed' => '3'],
                ['city' => 'New York', 'temperature' => '10', 'description' => 'Rainy','humidity' => '85', 'wind_speed' => '8'],
            ]
        );

    }
}
