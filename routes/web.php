<?php

use Illuminate\Support\Facades\Route;

// Homepage (index.blade.php)
Route::get('/', function () {
    return view('index');
});

Route::get('/details', function(){
    return view('details');
})->name('detail');

// 404 Error page
Route::fallback(function () {
    return view('404');
});
