<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "judul" => "Ini Superman",
            "slug" => "ini-superman",
            "author" => "Zack Snyder",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolorum dignissimos saepe! Illo a quidem quis iusto explicabo eveniet ut veritatis est quo veniam quaerat atque temporibus, laborum minima consectetur ipsam adipisci mollitia dignissimos quod excepturi quia? Tempora quidem nobis, nulla et molestias ut, enim, quod incidunt debitis non nisi officia fugiat vero fuga temporibus iste expedita cupiditate nesciunt unde sit amet quibusdam saepe! Quisquam excepturi perspiciatis fugit dignissimos sit."
        ],
        [
            "judul" => "Ini Batman",
            "slug" => "ini-batman",
            "author" => "Zack Snyder",
            "body" => "Voluptate dolorum dignissimos saepe! Illo a quidem quis iusto explicabo eveniet ut veritatis est quo veniam quaerat atque temporibus, laborum minima consectetur ipsam adipisci mollitia dignissimos quod excepturi quia? Tempora quidem nobis, nulla et molestias ut, enim, quod incidunt debitis non nisi officia fugiat vero fuga temporibus iste expedita cupiditate nesciunt unde sit amet quibusdam saepe! Quisquam excepturi perspiciatis fugit dignissimos sit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolorum dignissimos saepe! Illo a quidem quis iusto explicabo eveniet ut veritatis est quo veniam quaerat atque temporibus, laborum minima consectetur ipsam adipisci mollitia dignissimos quod excepturi quia? Tempora quidem nobis, nulla et molestias ut, enim, quod incidunt debitis non nisi officia fugiat vero fuga temporibus iste expedita cupiditate nesciunt unde sit amet quibusdam saepe! Quisquam excepturi perspiciatis fugit dignissimos sit."
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
