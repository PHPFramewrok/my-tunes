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

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'TunesController@index');
Route::get('library', 'TunesController@library');
Route::get('artist/{artistString}', 'SortController@artist');


//Laravel 5 example
Route::get('home', 'HomeController@index');
