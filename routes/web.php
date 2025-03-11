<?php





use App\Models\User;
use App\Models\Article;
use App\Models\Category;
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
Route::get('/authors/{user:username}', function(User $user){
    // $article = Article::find($id);
    // $articles = $user->articles->load('category', 'author');
    return view('articles', ['title' => count($user->articles). ' Artikel Dari ' . $user->name , 'articles' => $user->articles] );
});
Route::get('/categories/{category:slug}', function(Category $category){
    // $article = Article::find($id);
    // $categories = $category->articles->load('category', 'author');
    return view('articles', ['title' => ' Artikel By ' . $category->name , 'articles' => $category->articles] );
});

Route::get('/articles', function () {

    return view('articles', ['title' => 'Halaman Beritaku', 'articles'=> Article::filter(request(['search', 'category', 'author']))->latest()->get()]);
});
