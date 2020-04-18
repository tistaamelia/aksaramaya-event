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

Route::get('/', 'LandingPageController@index')->name('LandingPageIndex');
Route::post('/form-contact', 'LandingPageController@formContact')->name('LandingPageFormContact');
Route::get('/mentor', 'LandingPageController@listMentor')->name('LandingPageListMentor');
Route::get('/mentor-detail/{user}', 'LandingPageController@detailMentor')->name('LandingPageDetailMentor');
