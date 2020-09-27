<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('room/availability', 'API\RoomController@index');
Route::post('room/reservation', 'API\RoomController@store');
Route::put('room/reservation/{room}', 'API\RoomController@update');
Route::delete('room/reservation/{room}', 'API\RoomController@destroy');