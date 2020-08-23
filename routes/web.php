<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/portofolioo', 'HomeController@portofolio')->name('portofolioo');
Route::post('/recruitment', 'RecruitmentController@store')->name('recruitment');

Route::group(['middleware' => 'auth'], function () {
    Route::resources([
        'experience'    => 'ExperienceController',
        'project'       => 'ProjectController',
        'portofolio'    => 'PortofolioController'
    ]);
    Route::get('portofolio/activated/{id}', 'PortofolioController@activated')->name('portofolio_activated');
});

Auth::routes(['register' => false]);
