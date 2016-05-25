<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('auth/socialite/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/callback/{provider}', 'Auth\AuthController@handleProviderCallback');

Route::get('/home', 'HomeController@index');
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);