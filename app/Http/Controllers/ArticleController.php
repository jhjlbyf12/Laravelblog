<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function addArticle(Request $request){
        $title = $request->title;
        $content = $request->contentField;
        $userId = auth()->user()->getAuthIdentifier();
        $user = User::where('id', $userId)->first();
        $author = $user->name;
        $article = new Article();
        $article->title = $title;
        $article->content = $content;
        $article->author = $author;
        $article->save();
        return redirect()->intended('/');

    }

    function showArticle(Request $request){
        $articleId = $request->id;
        $article = Article::where('id', $articleId)->first();
        return view('article', ['article'=>$article]);

    }
}
