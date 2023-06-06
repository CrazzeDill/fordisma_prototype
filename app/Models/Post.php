<?php

namespace App\Models;

class Post
{
    private static $posts = [
        [
            "title" => "Title Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, mollitia.",
            "slug" => "Title_lorem_ipsum",
            "author" => "Agnes Wulandari",
            "date" => "01/01/2023",
            "topic" => "UKM dan Organisasi",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta autem sit neque, sint commodi porro, odit distinctio corrupti nam aliquid blanditiis, ut laudantium. Qui vero maiores quisquam aperiam libero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet consequatur beatae adipisci ad rerum fugit recusandae temporibus facilis aliquam! Officia exercitationem incidunt obcaecati cum quis necessitatibus accusamus ex quisquam sapiente.",
            "replies" => 27,
            "likes" => 2721
        ],
        [
            "title" => "Title Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, mollitia.",
            "slug" => "Title_lorem_ipsum_2",
            "author" => "Muhammad Nabil",
            "date" => "01/01/2023",
            "topic" => "Event Kampus",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta autem sit neque, sint commodi porro, odit distinctio corrupti nam aliquid blanditiis, ut laudantium. Qui vero maiores quisquam aperiam libero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet consequatur beatae adipisci ad rerum fugit recusandae temporibus facilis aliquam! Officia exercitationem incidunt obcaecati cum quis necessitatibus accusamus ex quisquam sapiente.",
            "replies" => 27,
            "likes" => 2643
        ],
        [
            "title" => "Title Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, mollitia.",
            "slug" => "Title_lorem_ipsum_3",
            "author" => "ODP",
            "date" => "01/01/2023",
            "topic" => "Masukan dan Satan",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta autem sit neque, sint commodi porro, odit distinctio corrupti nam aliquid blanditiis, ut laudantium. Qui vero maiores quisquam aperiam libero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet consequatur beatae adipisci ad rerum fugit recusandae temporibus facilis aliquam! Officia exercitationem incidunt obcaecati cum quis necessitatibus accusamus ex quisquam sapiente.",
            "replies" => 27,
            "likes" => 9210
        ],
    ];

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere("slug", $slug);
    }
}
