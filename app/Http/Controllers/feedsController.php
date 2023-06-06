<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class feedsController extends Controller
{
    public function showHome(){
        return view('home', [
            'current' => 'Home',
            "posts" => Post::all()
        ]);
    }

    public function showPopular(){
        return view('home', [
            'current' => 'Home',
            "posts" => Post::all()->sortByDesc('likes')
        ]);
    }

    public function showPost($topic, $post){
        return view('postPage', [
            'current' => str_replace('_',' ',$topic),
            "post" => Post::find($post),
        ]);
    }

    public function editPost($topic, $post){
        return view('editPost', [
            'current' => str_replace('_',' ',$topic),
            "post" => Post::find($post),
        ]);
    }
}
