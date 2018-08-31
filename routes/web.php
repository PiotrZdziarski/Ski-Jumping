<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'SitesController@index']);

Route::get('/news/{id}', ['uses' => 'SitesController@news']);
Route::get('/player/{id}', ['uses' => 'SitesController@player']);
Route::get('/404', function(){
    return view('sites.404');
});
Route::get('country/{id}', ['uses' => 'SitesController@country']);




