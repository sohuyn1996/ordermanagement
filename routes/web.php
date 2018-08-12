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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout_home');


Route::group(['prefix' => 'order', 'middleware' => 'auth'], function(){
  Route::get('index', ['as' => 'order_index', 'uses' => 'OrderManagement@index']);
});
