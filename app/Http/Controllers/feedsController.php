<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topik;
use Illuminate\Http\Request;

class feedsController extends Controller
{
    public function showHome(){
        return view('home', [
            'current' => 'Home',
            "posts" => Post::all(),
            "topiks" => Topik::all()
        ]);
    }

    public function showPopular(){
        return view('home', [
            'current' => 'Home',
            "posts" => Post::all()->sortByDesc('likes'),
            "topiks" => Topik::all()
        ]);
    }

    public function showPost($topic, $post){
        return view('postPage', [
            'current' => str_replace('_',' ',$topic),
            "post" => Post::find($post),
            "topiks" => Topik::all()
        ]);
    }

    public function editPost($topic, $post){
        return view('editPost', [
            'current' => str_replace('_',' ',$topic),
            "post" => Post::find($post),
            "topiks" => Topik::all()
        ]);
    }
}
