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

// fb login
Route::get('auth/facebook', 'Auth\FBController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\FBController@handleProviderCallback');

// google login
Route::get('auth/google','Auth\GoogleController@redirectToProvider');
Route::get('auth/google/callback','Auth\GoogleController@handleProviderCallback');