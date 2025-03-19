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

Route::middleware([EnsureIsUserPerumahan::class, IzinTinggalPerumahan::class])->group(function () {

    Route::get('/article', [ArticleController::class, 'index']);

    Route::get('/article/{id}/{category}', function (Request $request, $id, $category) {
        return $id . $category . $request->order_by;
    });
    Route::withoutMiddleware([EnsureIsUserPerumahan::class])->group(function () {
        Route::get('perumahan', [PerumahanController::class, 'index']);
    });
});

Route::get('/user/{id}', [UserController::class, 'index']);
Route::get('/home', HomeController::class);
Route::get('/home/index', [HomeController::class, 'index']);
