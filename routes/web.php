<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('common_pages.home_view');
});
Route::get('/about', function () {
    return view('common_pages.about_view');
});
