<?php

Route::get('/', 'HomeController@getHomepage');

Route::get('/admin/transactions/' , 'TransactionsController@index');
Route::get('/admin/transactions/create/' , 'TransactionsController@create');
Route::post('/admin/transactions/store' , 'TransactionsController@store');
Route::get('/admin/transacations/show/$id/' , 'TransactionsController@show');

Route::get('/admin/payees/' , 'PayeesController@index');
Route::get('/admin/payees/create/' , 'PayeesController@create');
Route::post('/admin/payees/store' , 'PayeesController@store');
Route::get('/admin/payees/show/$id/' , 'PayeesController@show');

Route::post('/admin/edit/update', 'HomeController@updateProfile');
Route::get('/admin/edit/profile/', 'HomeController@editProfile');

Auth::routes();
Route::get('/admin/home', 'HomeController@index')->name('home');




