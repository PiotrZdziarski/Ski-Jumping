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

//countries
Route::get('countries', 'CountryController@index');
Route::get('countriescount/{count}', 'CountryController@show_count');
Route::get('countries_show/{id}', 'CountryController@show');

//players
Route::get('playerscount/{count}', 'PlayerController@show_count');
Route::get('player_show/{id}', 'PlayerController@show');
Route::get('player_show_by_country/{country_id}', 'PlayerController@show_by_country');

//events
Route::get('eventscount/{count}', 'EventController@show_count');

//news
Route::get('news_show/{id}', 'NewsController@show');
Route::get('newscount/{count}', 'NewsController@show_count');

//comments
Route::get('comment_show/{news_id}', 'CommentController@show');
Route::post('comment_store', 'CommentController@store');



