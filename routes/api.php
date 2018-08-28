<?php

use Illuminate\Http\Request;

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

Route::get('countries', 'CountryController@index');

Route::get('countriescount/{count}', 'CountryController@show_count');
Route::get('playerscount/{count}', 'PlayerController@show_count');


Route::get('eventscount/{count}', 'EventController@show_count');



