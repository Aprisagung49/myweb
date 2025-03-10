<?php


use App\Models\News;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Halaman Awal']);
});
Route::get('/profile', function () {
    return view('profile', ['title' => 'Halaman Profileku']);
});
Route::get('/projek', function () {
    return view('projek', ['title' => 'Halaman Projectku']);
});
Route::get('/follow', function () {
    return view('follow', ['title' => 'Halaman Follow Me']);
});

Route::get('/news/{slug}', function($slug){
    $new = News::find($slug);
    return view('new', ['title' => $new['title'], 'new' => $new] );
});

Route::get('/news', function () {
    return view('news', ['title' => 'Halaman Beritaku', 'news' => News::all()]);
});
