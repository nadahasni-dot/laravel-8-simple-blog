<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            "posts" => Post::all(),
        ]);
    }

    public function show($slug)
    {
        $post = Post::find($slug);

        return view('post', [
            "title" => $post['title'],
            "post" => $post,
        ]);
    }
}
