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

Route::get('/washrooms', 'WashroomController@index');
Route::get('/washrooms/{id}', 'WashroomController@show');
Route::post('/washrooms', 'WashroomController@store');
Route::put('/washrooms/{id}', 'WashroomController@update');
Route::delete('/washrooms/{id}', 'WashroomController@destroy');

Route::get('/areas', 'AreaController@index');
Route::get('/areas/{id}', 'AreaController@show');

Route::get('/establishments', 'EstablishmentController@index');
Route::get('/establishments/{id}', 'EstablishmentController@show');
Route::get('/visitors','visitorController@index');