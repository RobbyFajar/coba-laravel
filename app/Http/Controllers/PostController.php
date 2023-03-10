<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        return view('posts', [
            "title" => "All Post",
            "active" => 'posts',
            // "posts" => Post::all(),

            // methode eager loading 
            //"post" => Post::with(['author', 'category'])->get()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
