<?php

// use Illuminate\Support\Facades\Route;


// on peut nommer notre route de cette façon
Route::name('home')->get('/', function() {
    return view('pages/home');
});



Route::get('page_about-us', function() {
    return view('pages/about');
})->name('about');