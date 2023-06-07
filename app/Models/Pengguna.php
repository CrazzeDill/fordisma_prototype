<?php

namespace App\Models;

class Pengguna
{
    private static $p = [
        [
            "name" => "Agnes Wulandari",
        ],
        [
            "name" => "Muhammad Nabil",
        ],
        [
            "name" => "Hazron Redian",
        ],
        [
            "name" => "ReginaLaranturaPasae",
        ],
        [
            "name" => "ODP",
        ],
    ];

    public static function all()
    {
        return collect(self::$p);
    }

    public static function find($slug)
    {
        $topik = static::all();
        return $topik->firstWhere("name", str_replace('_', ' ',$slug));
    }
}
