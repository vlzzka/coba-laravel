<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = 
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Valezka Ghardia",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Amet ad fugiat impedit est eveniet accusantium tenetur sit ab. Impedit sit nesciunt non! 
            Quisquam et at cumque sapiente cupiditate temporibus minima?"
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Valezka Ghardia",
            "body" => "Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Asperiores reiciendis debitis provident illum suscipit tempore distinctio 
            totam quidem aliquam ullam labore, reprehenderit, eaque fugit nulla, nostrum fuga? Doloremque 
            nobis voluptas animi magni fficia veniam cupiditate cumque eaque quaerat, labore iusto dolores sapiente m
            agnam ipsum aperiam, modi, optio perspiciatis odio culpa."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);

    }

}
