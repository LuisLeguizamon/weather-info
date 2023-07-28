<?php

use App\Http\Controllers\Api\Weather\UserWeatherInfoController;
use App\Http\Controllers\Api\Weather\WeatherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return response()->json([
        'message' => 'all systems are a go',
        'users' => \App\Models\User::all(),
    ]);
});

Route::get('/users/weather-info', [UserWeatherInfoController::class, 'index'])->name('weather.index');
Route::get('/weather/{user}', [WeatherController::class, 'show'])->name('weather.show');