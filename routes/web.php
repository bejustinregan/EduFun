<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/writers', function () {
    return view('writers');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/popular', function () {
    return view('popular');
});

Route::get('/about', [HomeController::class, 'aboutus']);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
