<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all()->sortByDesc('created_at');

        return view('articles.index', ['articles' => $articles]);
        // with使う方法
        // return view('articles.index')->with(['articles' => $articles]);
        // compact
        // return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('articles.index');
    }
}
