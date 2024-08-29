<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;

Route::get('/', function () {
    return view('home');
});


Route::get('/about',    fn() => view('about'));
Route::get('/contact',  fn() => view('contact'));
Route::get('/cart',     fn() => view('cart'));
Route::get('/checkout', fn() => view('checkout'));
Route::get('/shop', function () {
        $products = Products::all();
        dd($products);
        //view('shop-grid')
    }
);



Route::get('/shop/{item}', fn($item) => view('shop-details'));
