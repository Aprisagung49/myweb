<?php





use App\Models\User;
use App\Models\Article;
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

Route::get('/articles/{article:slug}', function(Article $article){
    // $article = Article::find($id);
    return view('article', ['title' => $article['title'], 'article' => $article] );
});
Route::get('/authors/{user}', function(User $user){
    // $article = Article::find($id);
    return view('articles', ['title' => 'Artikel By ' . $user->name , 'articles' => $user->articles] );
});

Route::get('/articles', function () {
    return view('articles', ['title' => 'Halaman Beritaku', 'articles' => Article::all()]);
});
