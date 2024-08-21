<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/shop', fn() => view('shop-grid'));
Route::get('/shop#details', fn() => view('shop-details'));
