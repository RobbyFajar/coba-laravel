<?php

namespace App\Models;



class Post
{
    private static $blog_post =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Robby FM",
            "body" => "Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Minima, molestias vero! 
                Aliquid provident voluptas quia accusamus earum fugit voluptatem ab veritatis, 
                cupiditate dicta magnam dolor natus vel, illo sed itaque?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Robby FM",
            "body" => "Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Minima, molestias vero! 
               "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] == $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
