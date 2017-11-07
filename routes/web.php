<?php

Route::get('/', 'HomeController@getHomepage');
Route::get('/admin/transactions/' , 'TransactionsController@index');
Route::get('/admin/transacations/create' , 'TransactionsController@create');
Route::post('/admin/transacations/store' , 'TransactionsController@store');
Route::get('/admin/transacations/show/$id' , 'TransactionsController@show');



Route::post('/admin/edit/update', 'HomeController@updateProfile');
Route::get('/admin/edit/profile/', 'HomeController@editProfile');

Auth::routes();
Route::get('/admin/home', 'HomeController@index')->name('home');




