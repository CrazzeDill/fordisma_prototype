<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function like(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->likes += 1;
        $post->save();

        return response()->json(['message' => 'Post liked successfully']);
    }

    public function dislike(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->likes -= 1;
        $post->save();

        return response()->json(['message' => 'Post disliked successfully']);
    }
}
