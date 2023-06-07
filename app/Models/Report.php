<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report
{
    private static $reports = [
        [
            "post_slug" => "Title_lorem_ipsum_2",
            "reporter" => "ODP",
            "context" => "Mengganggu"
        ],
        [
            "post_slug" => "Title_lorem_ipsum_2",
            "reporter" => "Hazron Redian",
            "context" => "Spam"
        ],
        [
            "post_slug" => "Title_lorem_ipsum_2",
            "reporter" => "AgnesWu",
            "context" => "Mengancam pengguna lain"
        ],
    ];

    public static function all()
    {
        return collect(self::$reports);
    }
}
