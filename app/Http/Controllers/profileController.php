<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Report;
use App\Models\Topik;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function showProfile($username){
        return view('userProfile', [
            'current' => str_replace('_',' ',$username),
            'posts' => Post::all()->where('author',str_replace('_',' ',$username)),
            'topiks' => Topik::all()
        ]);
    }
}
