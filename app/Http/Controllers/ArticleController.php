<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
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

    public function store(Request $request)
    {
        // if ($request->has(['title', 'description'])) {
        //     dd('melakukan reindex google');
        // }
        // $title = $request->query();

        // $request->whenHas('title', function (string $input) {
        //     dd('melakukan reindex ke google yes ' . $input);
        // }, function () {
        //     dd('Tidakkkk');
        // });

        // $request->whenMissing('title', function () {
        //     dd('Tidakkk');
        // }, function () use ($request) {
        //     dd('Yayayaya' . $request->title);
        // });

        // $request->whenFilled('title', function () {
        //     dd('Tidakkk');
        // }, function () use ($request) {
        //     dd('Yayayaya' . $request->title);
        // });

        $path = $request->thumbnail->store('images');
        dd($path);

        // $article_category = ArticleCategory::inRandomOrder()->first();
        // Article::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'thumbnail' => 'thumbnail',
        //     'category_id' => $article_category->id
        // ]); 

        // return redirect()->route('article.index');
    }
}
