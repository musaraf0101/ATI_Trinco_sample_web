<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('common_pages.home_view');
});
Route::get('/about', function () {
    return view('common_pages.about_view');
});
Route::get('/course/hnd-it',function(){
    return view('common_pages.course.hnd_it_view');
});
Route::get('/course/hnd-accounts',function(){
    return view('common_pages.course.hnd_account_view');
});