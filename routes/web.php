<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;

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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Robby Fajar",
        "email" => "robyfajar007@outlook.com",
        "image" => "sabar.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);


Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

//halaman single posts using zero configuration and lazy loading 
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        "active" => 'post',
        'posts'  => $category->posts->load('category', 'author'),
        'category' => $category->name
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {

    return view('posts', [
        'title' => "Post by Author : $author->name",
        "active" => 'post',
        'posts'  => $author->posts->load('category', 'author'),
    ]);
});
