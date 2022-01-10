<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Nada Hasni',
            'email' => 'nada@gmail.com',
            'password' => bcrypt('qwerty'),
        ]);

        User::create([
            'name' => 'Haris Herman',
            'email' => 'haris@gmail.com',
            'password' => bcrypt('qwerty'),
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque accusantium eveniet minus delectus deleniti eum tempore corrupti illo eos possimus',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque accusantium eveniet minus delectus deleniti eum tempore corrupti illo eos possimus beatae atque ad unde consectetur voluptatibus enim aliquam voluptate, inventore ut magnam perferendis voluptatem dolorem, nemo quasi! Laboriosam sed officiis dolores aperiam expedita. Cupiditate, id? Porro omnis dignissimos animi eligendi suscipit eum amet voluptas praesentium quidem reiciendis, nemo repellendus harum iure vitae illo molestiae error nesciunt natus delectus aut ea? Repellat similique maxime vero maiores natus ipsam nihil minus facere corrupti? Quos quod odio molestias a eveniet. Dolores necessitatibus vitae sapiente deleniti, veritatis quibusdam temporibus adipisci porro rem numquam molestias!',
        ]);

        Post::create([
            'user_id' => 2,
            'category_id' => 1,
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque accusantium eveniet minus delectus deleniti eum tempore corrupti illo eos possimus',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque accusantium eveniet minus delectus deleniti eum tempore corrupti illo eos possimus beatae atque ad unde consectetur voluptatibus enim aliquam voluptate, inventore ut magnam perferendis voluptatem dolorem, nemo quasi! Laboriosam sed officiis dolores aperiam expedita. Cupiditate, id? Porro omnis dignissimos animi eligendi suscipit eum amet voluptas praesentium quidem reiciendis, nemo repellendus harum iure vitae illo molestiae error nesciunt natus delectus aut ea? Repellat similique maxime vero maiores natus ipsam nihil minus facere corrupti? Quos quod odio molestias a eveniet. Dolores necessitatibus vitae sapiente deleniti, veritatis quibusdam temporibus adipisci porro rem numquam molestias!',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque accusantium eveniet minus delectus deleniti eum tempore corrupti illo eos possimus',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque accusantium eveniet minus delectus deleniti eum tempore corrupti illo eos possimus beatae atque ad unde consectetur voluptatibus enim aliquam voluptate, inventore ut magnam perferendis voluptatem dolorem, nemo quasi! Laboriosam sed officiis dolores aperiam expedita. Cupiditate, id? Porro omnis dignissimos animi eligendi suscipit eum amet voluptas praesentium quidem reiciendis, nemo repellendus harum iure vitae illo molestiae error nesciunt natus delectus aut ea? Repellat similique maxime vero maiores natus ipsam nihil minus facere corrupti? Quos quod odio molestias a eveniet. Dolores necessitatibus vitae sapiente deleniti, veritatis quibusdam temporibus adipisci porro rem numquam molestias!',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque accusantium eveniet minus delectus deleniti eum tempore corrupti illo eos possimus',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque accusantium eveniet minus delectus deleniti eum tempore corrupti illo eos possimus beatae atque ad unde consectetur voluptatibus enim aliquam voluptate, inventore ut magnam perferendis voluptatem dolorem, nemo quasi! Laboriosam sed officiis dolores aperiam expedita. Cupiditate, id? Porro omnis dignissimos animi eligendi suscipit eum amet voluptas praesentium quidem reiciendis, nemo repellendus harum iure vitae illo molestiae error nesciunt natus delectus aut ea? Repellat similique maxime vero maiores natus ipsam nihil minus facere corrupti? Quos quod odio molestias a eveniet. Dolores necessitatibus vitae sapiente deleniti, veritatis quibusdam temporibus adipisci porro rem numquam molestias!',
        ]);
    }
}
