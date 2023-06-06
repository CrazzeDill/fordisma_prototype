<?php

namespace App\Models;

class Topik
{
    private static $topik = [
        [
            "name" => "UKM dan Organisasi",
        ],
        [
            "name" => "Event Kampus",
        ],
        [
            "name" => "Study clubs",
        ],
        [
            "name" => "Magang dan Kesempatan Kerja",
        ],
        [
            "name" => "Akomodasi/Tempat Tinggal",
        ],
        [
            "name" => "Gadget dan Teknologi",
        ],
        [
            "name" => "Seni dan Karya Kreatif",
        ],
        [
            "name" => "Kuliner",
        ],
        [
            "name" => "Bantuan Akademik",
        ],
        [
            "name" => "Masukan dan Saran",
        ],
    ];

    public static function all()
    {
        return collect(self::$topik);
    }

    public static function find($slug)
    {
        $topik = static::all();
        return $topik->firstWhere("name", str_replace('_', ' ',$slug));
    }
}
