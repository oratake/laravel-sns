<?php

namespace App\Http\Controllers;

use App\Article;
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
}
