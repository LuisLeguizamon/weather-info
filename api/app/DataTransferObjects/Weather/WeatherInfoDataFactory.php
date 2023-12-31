<?php

namespace App\DataTransferObjects\Weather;

use Psr\Http\Message\ResponseInterface;

class WeatherInfoDataFactory
{
    public function fromApiResponse($userId, ResponseInterface $response): WeatherInfoData
    {
        $responseObject = json_decode($response->getBody()->getContents());
        return new WeatherInfoData(
            $userId,
            $responseObject->main->temp,
            $responseObject->name,
            $responseObject->weather[0]->description,
            $responseObject->main->feels_like,
            $responseObject->main->humidity,
        );
    }
}