<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureIsUserPerumahan;
use App\Http\Middleware\IzinTinggalPerumahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/article', [ArticleController::class, 'index']);

Route::get('/article/{id}/{category}', function (Request $request, $id, $category) {
    return $id . $category . $request->order_by;
});

Route::get('/user', [UserController::class, 'index']);
