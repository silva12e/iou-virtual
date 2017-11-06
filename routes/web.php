<?php

Route::get('/', 'HomeController@getHomepage');

Auth::routes();
Route::get('/admin/home', 'HomeController@index')->name('home');
