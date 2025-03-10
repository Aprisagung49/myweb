<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    //
    use HasFactory;
    protected $table = 'article'; // insisialisasi agar laravel mengarah ke table Article bukan Articles
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
