<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $articles = Article::all();
    return view('home', ['articles'=>$articles]);
})->name('home');
Route::get('/article/{id}', [\App\Http\Controllers\ArticleController::class, 'showArticle']);

Route::get('/addArticle', function (){
    return view('addArticle');
})->middleware('auth');

Route::get('/commentArticle', function(){
    return view('commentArticle');
});

Route::post('/addArticle', [\App\Http\Controllers\ArticleController::class, 'addArticle']);
Route::get('/register', function (){
    return view('auth.register');
});
Route::get('/login', function (){
    return view('auth.login');
});
Route::get('/profile', function (){
    $user = auth()->user();
    return view('profile', ['user'=>$user]);
})->middleware('auth')->name("profile");
Route::get('/secret', function (){
    return "SECRET";
})->middleware('auth');

require __DIR__.'/auth.php';
