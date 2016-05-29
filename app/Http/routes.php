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


/**
 * Auth routes
 */
Route::auth();
Route::get('auth/socialite/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/callback/{provider}', 'Auth\AuthController@handleProviderCallback');

/**
 * Welcome page
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Home page
 */
Route::get('/home', 'HomeController@index');

/**
 * Language routes
 */
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::resource('projects', 'ProjectController', [
    'except' => 'show',
    'names' => [
        'index' => 'project.index',
        'create' => 'project.create',
        'store' => 'project.store',
        'show' => 'project.show',
        'update' => 'project.update',
        'edit' => 'project.edit',
        'destroy' => 'project.destroy',
    ],
]);