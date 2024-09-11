<?php

use Illuminate\Support\Facades\Route;

// Homepage (index.blade.php)
Route::get('/', function () {
    return view('index');
});

// Products Details 
Route::get('/details', function(){
    return view('details');
})->name('detail');

// Products Category 
Route::get('/category', function(){
    return view('categories');
})->name('category');

// Products Shopping Cart 
Route::get('/shopping-cart', function(){
    return view('shoppingcart');
})->name('cart');



// 404 Error page
Route::fallback(function () {
    return view('404');
});
