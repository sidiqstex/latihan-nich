<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $judul = "Test Cuy";
        return view('article', compact('judul'));
    }
}
