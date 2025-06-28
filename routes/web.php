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
Route::get('/course/hnd-english',function(){
    return view('common_pages.course.hnd_english_view');
});
Route::get('/message/director',function(){
    return view('common_pages.message.director_message_view');
});
Route::get('/message/director-genrel',function(){
    return view('common_pages.message.director_genrel_message_view');
});