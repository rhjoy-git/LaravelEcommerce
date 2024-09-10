<?php

use Illuminate\Support\Facades\Route;

// Homepage (index.blade.php)
Route::get('/', function () {
    return view('index');
});



// 404 Error page
Route::fallback(function () {
    return view('404');
});
