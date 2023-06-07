<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Post;
use App\Models\Report;
use App\Models\Topik;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function showOverview(){
        return view('adminOverview', [
            'current' => 'Menu admin',
            'posts' => Post::all(),
            'topiks' => Topik::all()
        ]);
    }

    public function showTopik(){
        return view('adminTopik', [
            'current' => 'Menu admin',
            'posts' => Post::all(),
            'topiks' => Topik::all()
        ]);
    }

    public function showPost(){
        return view('adminPost', [
            'current' => 'Menu admin',
            'posts' => Post::all(),
            'topiks' => Topik::all()
        ]);
    }

    public function showUser(){
        return view('adminUser', [
            'current' => 'Menu admin',
            'posts' => Post::all(),
            'topiks' => Topik::all(),
            'users' => Pengguna::all()
        ]);
    }
}
