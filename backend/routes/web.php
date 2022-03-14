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


Auth::routes();

Route::prefix("admin")->namespace("Admin")->middleware("auth")->group(function(){
     Route::get('/', 'RestaurantController@index')->name('home');
     Route::resource('restaurants', 'RestaurantController');
     Route::resource('dishes', 'DishController');
});


