<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Postingan Ke-1',
            'slug' => 'judul-postingan-ke-1',
            'author' => 'Sakata Gintoki',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore quibusdam quod corrupti doloremque quis temporibus rem, excepturi quisquam, vero perspiciatis suscipit nostrum non provident, autem minus in nihil ad harum blanditiis? Officiis perferendis id sequi quasi consequuntur? Maiores ut velit non asperiores suscipit, repellendus atque expedita alias in optio consectetur incidunt repellat sint magnam harum totam veniam rerum omnis itaque nostrum! Illo optio hic neque voluptas modi iusto labore ullam aliquam quo, minima, fugiat voluptatem dolorum repellat quae cum possimus.',
        ],
        [
            'title' => 'Judul Postingan Ke-2',
            'slug' => 'judul-postingan-ke-2',
            'author' => 'Kenpachi Unohana',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore quibusdam quod corrupti doloremque quis temporibus rem, excepturi quisquam, vero perspiciatis suscipit nostrum non provident, autem minus in nihil ad harum blanditiis? Officiis perferendis id sequi quasi consequuntur? Maiores ut velit non asperiores suscipit, repellendus atque expedita alias in optio consectetur incidunt repellat sint magnam harum totam veniam rerum omnis itaque nostrum! Illo optio hic neque voluptas modi iusto labore ullam aliquam quo, minima, fugiat voluptatem dolorum repellat quae cum possimus.',
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
