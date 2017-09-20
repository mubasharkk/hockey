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


Route::group(['namespace' => 'Api'], function(){
    Route::get('regions', ['uses' => 'RegionsController@index', 'as' => 'regions-list']);
    Route::get('leagues/{regionId}', ['uses' => 'RegionsController@leagues', 'as' => 'leagues-list']);
    Route::get('clubs/{regionId}', ['uses' => 'RegionsController@clubs', 'as' => 'clubs-list']);
});
