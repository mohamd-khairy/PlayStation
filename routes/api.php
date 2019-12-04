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

Route::group([

    'middleware' => ['api' , 'CheckToken'],
    'namespace' => 'Api',

], function () {

    Route::post('auth/logout', 'AuthController@logout');
    Route::post('auth/refresh', 'AuthController@refresh');

    /** device route */
    Route::resource('device' , 'DeviceController');
    /** deviceType route */
    Route::resource('device-type' , 'DeviceTypeController');
    /** gameType route */
    Route::resource('game-type' , 'GameTypeController');
});

Route::group([
    'middleware' => 'api',
    'namespace' => 'Api',
], function () {

    Route::post('auth/login', 'AuthController@login');
    Route::post('auth/register', 'AuthController@register');
    Route::post('auth/me', 'AuthController@me');

});