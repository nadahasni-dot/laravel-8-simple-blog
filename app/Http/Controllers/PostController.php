<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $user = User::firstWhere('username', request('author'));
            $title = ' by ' . $user->name;
        }

        return view('blog', [
            "title" => "Blog Posts" . $title,
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
