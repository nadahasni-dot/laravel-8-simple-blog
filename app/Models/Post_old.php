<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        $post = $posts->firstWhere('slug', $slug);

        return $post;
    }
}
