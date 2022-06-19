<?php

use App\Http\Controllers\DashboardPostsController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Shiro X",
        "email" => "shirox@gmail.com",
        "image" => "Untitled 111.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostsController::class)->middleware('auth');

// Route::get('categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         "active" => 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('authors/{author:username}', function (User $author) {
//     return view('posts', [
//         "active" => 'posts',
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });
