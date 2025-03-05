<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/projek', function () {
    return view('projek');
});
Route::get('/follow', function () {
    return view('follow');
});
Route::get('/news', function () {
    return view('news');
});
