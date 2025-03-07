<?php

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
    $news = [
        [
        'id' => 1,
        'slug' => 'programing-zaman-now',
        'title' => 'PROGRAMING ZAMAN NOW',
        'author' => 'Apris Agung Wiresa',
        'body' =>   'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.'
        ],
        [
        'id' => 2,
        'slug' => 'learn-css-tailwind',
        'title' => 'LEARN CSS TAILWIND',
        'author' => 'IMAN',
        'body' =>   'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.'
        ],
        [
        'id' => 3,
        'slug' => 'learn-laravel-php',
        'title' => 'LEARN LARAVEL PHP',
        'author' => 'GAMA',
        'body' =>   'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.'
        ]   
    ];

    $new = Arr::first($news, function($new) use ($slug){
        return $new['slug'] == $slug;
    });
    return view('new', ['title' => $new['title'], 'new' => $new] );
});

Route::get('/news', function () {
    return view('news', ['title' => 'Halaman Beritaku', 'news' => 
    [
        [
        'id' => 1,
        'slug' => 'programing-zaman-now',
        'title' => 'PROGRAMING ZAMAN NOW',
        'author' => 'Apris Agung Wiresa',
        'body' =>   'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.'
        ],
        [
        'id' => 2,
        'slug' => 'learn-css-tailwind',
        'title' => 'LEARN CSS TAILWIND',
        'author' => 'IMAN',
        'body' =>   'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.'
        ],
        [
        'id' => 3,
        'slug' => 'learn-laravel-php',
        'title' => 'LEARN LARAVEL PHP',
        'author' => 'GAMA',
        'body' =>   'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.'
        ]   
    ]]);
});
