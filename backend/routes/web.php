<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\TopController::class, 'top'])->name('top');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');

Route::post('search', [App\Http\Controllers\SearchController::class, 'search']);

Route::get('post', [App\Http\Controllers\PostController::class, 'index'])->name('post');

Route::post('postcomplete', [App\Http\Controllers\PostController::class, 'complete']);

Route::get('login/twitter', [App\Http\Controllers\Auth\LoginController::class,'redirectToProvider'])->name('login.twitter');

Route::get('login/twitter/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);

Route::get('twitter',  [App\Http\Controllers\TwitterController::class, 'index']);
