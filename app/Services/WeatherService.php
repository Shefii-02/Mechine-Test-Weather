<?php 
namespace App\Services;

class WeatherService{

    private $apiKey;
    private $baseUrl;

    public function __construct()
    {
        $this->apiKey   = env('OPENWEATHER_API_KEY');
        $this->baseUrl  = env('OPENWEATHER_API_URL');
    }
    
    public function getWeather($city){
        $url = "{$this->baseUrl}?city={$city}&appid={$this->apiKey}&units=metric";

        $ch = curl_init();
 
        // Return Page contents.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         
        //grab URL and pass it to the variable.
        curl_setopt($ch, CURLOPT_URL, $url);
         
        $response = curl_exec($ch);

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error   = curl_error($ch);

        curl_close($ch);

        if($error){
            return ['error' => 'CURL Error : $error'];
        }

        if($httpCode !== 200){
            return ['error' => "API Error : Response Invalide (code : {$httpCode}"];
        }

       

        return json_decode($response, true);
    }


}