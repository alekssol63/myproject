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
    return view('adminpage');
});

Route::get('themes','MainController@ThemesView')->name('ThemesView');
Route::post('newtheme','MainController@ThemeCreate')->name('ThemeCreate');
Route::get('theme/{theme}','MainController@Theme')->name('Theme');
Route::get('question','MainController@Question')->name('Question');
