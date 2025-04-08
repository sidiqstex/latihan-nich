<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMidleware;
use App\Http\Middleware\EnsureIsUserPerumahan;
use App\Http\Middleware\IzinTinggalPerumahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(AuthMidleware::class)->group(function () {
    Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/logout', [UserController::class, 'logout']);
});

Route::get('/article/{id}/{category}', function (Request $request, $id, $category) {
    return $id . $category . $request->order_by;
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login/Proccess', [UserController::class, 'loginProccess'])->name('login.proccess');
