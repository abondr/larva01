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

Route::get('/',['uses'=>"PageController@getHome",'as'=>'home_page']);
Route::get('/about',['uses'=>"PageController@getAbout",'as'=>'about_page']);

Route::resource('share', 'ShareController');


