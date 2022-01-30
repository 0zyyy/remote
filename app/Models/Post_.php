<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "judul" => "Blog Post 1",
            "slug" => "blog-post-1",
            "content" => "
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam perferendis excepturi fuga, modi adipisci iusto neque eligendi? Cupiditate dolores mollitia dolorum! Ipsam beatae cupiditate earum cumque soluta magnam? Qui minus accusamus repudiandae id quam totam. Doloribus voluptatibus sapiente, rerum quae, quasi odio consequatur reprehenderit nulla porro quos id, minus eaque placeat amet maxime. Ullam ab veniam quae corrupti, quos nemo accusamus esse voluptatum perspiciatis fugit rem cupiditate sunt. Consectetur, eum.",
            "created_at" => "2017-02-02",
            "author" => "Jalu"
        ],
        [
            "judul" => "Blog Post 2",
            "slug" => "blog-post-2",
            "content" => "
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam perferendis excepturi fuga, modi adipisci iusto neque eligendi? Cupiditate dolores mollitia dolorum! Ipsam beatae cupiditate earum cumque soluta magnam? Qui minus accusamus repudiandae id quam totam. Doloribus voluptatibus sapiente, rerum quae, quasi odio consequatur reprehenderit nulla porro quos id, minus eaque placeat amet maxime. Ullam ab veniam quae corrupti, quos nemo accusamus esse voluptatum perspiciatis fugit rem cupiditate sunt. Consectetur, eum.",
            "created_at" => "2017-02-02",
            "author" => "Bakekok"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $blog_posts = static::all();
        return $blog_posts->firstWhere('slug', $slug);
    }
}
