<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);


// Account
Route::get('account', ['as' => 'account', 'uses' => 'AccountController@index']);
Route::get('register', ['as' => 'account.create', 'uses' => 'AccountController@create']);
Route::post('register', ['as' => 'account.store', 'uses' => 'AccountController@store']);

// Session
Route::get('login', ['as' => 'login', 'uses' => 'SessionController@create']);
Route::get('logout', 'SessionController@destroy');
Route::resource('session', 'SessionController', ['only' => ['create', 'store', 'destroy']]);