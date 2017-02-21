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

Route::get('/',['uses' => 'PageController@index', 'as' => 'home']);

//Backend Section
Route::get('admin',['uses' => 'DashboardController@index', 'as' => 'admin']);
Route::resource('locations', 'LocationController');
Route::resource('restaurants', 'RestaurantController');
