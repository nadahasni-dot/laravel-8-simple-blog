<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blog Posts",
            "active" => "blog",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
            "categories" => Category::all(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => $post->title,
            "active" => "blog",
            "post" => $post,
            "categories" => Category::all(),
        ]);
    }
}
