<?php

namespace App\Models;

use Illuminate\Support\Arr;

class News
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug):array
    {
        $new = Arr::first(static::all(), function($new) use ($slug){
            return $new['slug'] == $slug;
        });

        if(!$new){
            abort(404);
        }
        return $new;
    }
}