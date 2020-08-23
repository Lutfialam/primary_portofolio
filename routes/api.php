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

Route::get('portofolio', 'Api\PortofolioController@index')->name('profile');
Route::post('portofolio', 'Api\PortofolioController@store')->name('portofolio_store');
Route::put('portofolio/{id}', 'Api\PortofolioController@update')->name('portofolio_edit');
Route::get('portofolio/activated/{id}', 'Api\PortofolioController@activated')->name('portofolio_activated');

Route::get('project', 'Api\ProjectController@index')->name('project');
Route::post('project', 'Api\ProjectController@store')->name('project');
Route::put('project/{id}', 'Api\ProjectController@update')->name('project');
