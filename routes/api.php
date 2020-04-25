<?php

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

Route::post('authenticate', 'AuthenticationController@doLogin')->name('authenticate.store');
Route::resource('minions', 'MinionController', ['parameters' => ['minions' => 'id']]);
Route::post('missions', 'MissionController@createMission')->name('missions.store');
Route::post('files', '\Luezoid\Laravelcore\Http\Controllers\FileController@store')->name('files.store');
