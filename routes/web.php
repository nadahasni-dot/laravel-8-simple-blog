<?php

use Illuminate\Support\Facades\Route;

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
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Nada Hasni",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, beatae itaque dolor doloribus adipisci quia nobis. Tenetur, reiciendis voluptatum dicta amet illum esse ex obcaecati alias nobis eveniet mollitia! Ex sint vero commodi perferendis, minus voluptatum optio cum praesentium enim molestias amet totam ad et consequatur cumque natus excepturi, voluptatibus explicabo. Dignissimos cupiditate praesentium nisi beatae, fuga reprehenderit necessitatibus facilis id dolore repellendus atque mollitia ea error molestiae natus numquam sequi amet perspiciatis? Minus dolorum placeat fugiat laudantium reiciendis. Doloremque ut dolorum ea, nihil repellendus eos voluptates nobis in exercitationem recusandae laboriosam consectetur distinctio expedita perspiciatis ab atque ad explicabo.",
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Budi Doremi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, beatae itaque dolor doloribus adipisci quia nobis. Tenetur, reiciendis voluptatum dicta amet illum esse ex obcaecati alias nobis eveniet mollitia! Ex sint vero commodi perferendis, minus voluptatum optio cum praesentium enim molestias amet totam ad et consequatur cumque natus excepturi, voluptatibus explicabo. Dignissimos cupiditate praesentium nisi beatae, fuga reprehenderit necessitatibus facilis id dolore repellendus.",
        ],
    ];

    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_posts,
    ]);
});

Route::get('/post/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Nada Hasni",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, beatae itaque dolor doloribus adipisci quia nobis. Tenetur, reiciendis voluptatum dicta amet illum esse ex obcaecati alias nobis eveniet mollitia! Ex sint vero commodi perferendis, minus voluptatum optio cum praesentium enim molestias amet totam ad et consequatur cumque natus excepturi, voluptatibus explicabo. Dignissimos cupiditate praesentium nisi beatae, fuga reprehenderit necessitatibus facilis id dolore repellendus atque mollitia ea error molestiae natus numquam sequi amet perspiciatis? Minus dolorum placeat fugiat laudantium reiciendis. Doloremque ut dolorum ea, nihil repellendus eos voluptates nobis in exercitationem recusandae laboriosam consectetur distinctio expedita perspiciatis ab atque ad explicabo.",
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Budi Doremi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, beatae itaque dolor doloribus adipisci quia nobis. Tenetur, reiciendis voluptatum dicta amet illum esse ex obcaecati alias nobis eveniet mollitia! Ex sint vero commodi perferendis, minus voluptatum optio cum praesentium enim molestias amet totam ad et consequatur cumque natus excepturi, voluptatibus explicabo. Dignissimos cupiditate praesentium nisi beatae, fuga reprehenderit necessitatibus facilis id dolore repellendus.",
        ],
    ];

    $post_detail = [];

    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $post_detail = $post;
        }
    }

    return view('post', [
        "title" => $post_detail['title'],
        "post" => $post_detail,
    ]);
});
