<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserContorller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Alfi Syahrin",
        'title' => "about"
    ]);
});

Route::get('posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'detail']);
Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{category:slug}', [CategoryController::class, 'detail']);
Route::get('author', [UserContorller::class, 'index']);
Route::get('author/{author:username}', [UserContorller::class, 'detail']);

Route::resource('/login', LoginController::class);
Route::resource('/register', RegisterController::class);
