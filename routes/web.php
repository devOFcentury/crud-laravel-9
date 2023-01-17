<?php

// use Illuminate\Support\Facades\Route;


Route::get('/', 'App\http\Controllers\ProductController@index')->name('index');
Route::get('/create', 'App\http\Controllers\ProductController@create')->name('create');
Route::post('/store', 'App\http\Controllers\ProductController@store')->name('store');
Route::get('/show/{product}', 'App\http\Controllers\ProductController@show')->name('show');
Route::get('/edit/{product}', 'App\http\Controllers\ProductController@edit')->name('edit');
Route::put('/edit/{product}', 'App\http\Controllers\ProductController@update')->name('update');
Route::delete('/{product}', 'App\http\Controllers\ProductController@destroy')->name('destroy');