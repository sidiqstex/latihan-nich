<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

        $judul = "Test Cuy";
        // $articles = Article::with('articleCategories')->get();
        // $articles = Article::select('articles.*', 'article_categories.title as category_title')
        //     ->leftJoin('article_categories', 'articles.category_id', '=', 'article_categories.id')
        //     ->get();

        // $articles = Article::LeftJoinArticleCategory()->get();
        // $articles = Article::with('articleCategories')->get(); //eiger load
        $articles = Article::with('articleCategories')->paginate(10); //eiger load
        // dd($articles);
        return view('article', compact('articles', 'judul'));
    }
}
