<?php

namespace App\Actions;

use App\DataTransferObjects\Weather\WeatherInfoData;
use App\Models\WeatherInfo;

class CreateWeatherInfoAction
{
    public function __invoke(WeatherInfoData $weatherInfoData)
    {
        $weatherInfo = new WeatherInfo();
        $weatherInfo->user_id = $weatherInfoData->userId;
        $weatherInfo->temperature_in_kelvin = $weatherInfoData->temperatureInKelvin;
        $weatherInfo->location = $weatherInfoData->location;
        $weatherInfo->description = $weatherInfoData->description;
        $weatherInfo->feels_like_in_kelvin = $weatherInfoData->feelsLikeInKelvin;
        $weatherInfo->humidity = $weatherInfoData->humidity;
        $weatherInfo->save();
    }
}