<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', fn () => view('about'));
Route::get('/contact', fn () => view('contact'));
