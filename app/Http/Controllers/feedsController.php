<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Report;
use App\Models\Topik;
use Illuminate\Http\Request;

class feedsController extends Controller
{
    public function showHome(Request $request)
    {
        $post = $request->query('delete');
        $posts = [];
        if ($post) {
            $posts = Post::all()->filter(function ($item) use ($post) {
                return $item['slug'] !== $post;
            });
        } else {
            $posts = Post::all();
        }

        return view('home', [
            'current' => 'Home',
            'posts' => $posts,
            'topiks' => Topik::all()
        ]);
    }

    public function showPopular()
    {
        return view('home', [
            'current' => 'Home',
            "posts" => Post::all()->sortByDesc('likes'),
            "topiks" => Topik::all()
        ]);
    }

    public function showPost($topic, $post)
    {
        return view('postPage', [
            'current' => str_replace('_', ' ', $topic),
            "post" => Post::find($post),
            "topiks" => Topik::all()
        ]);
    }

    public function showTopicPost($topic)
    {
        return view('home', [
            'current' => str_replace('_', ' ', $topic),
            "posts" => Post::findPosts($topic),
            "topiks" => Topik::all()
        ]);
    }

    public function editPost($topic, $post)
    {
        return view('editPost', [
            'current' => str_replace('_', ' ', $topic),
            "post" => Post::find($post),
            "topiks" => Topik::all()
        ]);
    }

    public function deletePost(Request $request, $topic, $post)
    {
        // Process the form data
        $title = $request->input('title');
        // Perform any necessary operations or validations with the data
        $posts = Post::all()->filter(function ($item) use ($post) {
            return $item['slug'] !== $post;
        });

        // Redirect or return a response
        return redirect()->route('home',["delete" => $post])->with('message','Post berhasil dihapus');
    }
    public function buatPost()
    {
        return view('createPost', [
            'current' => 'Create Post',
            "topiks" => Topik::all()
        ]);
    }

    public function showReports()
    {
        $slugs = Report::all()->map(function ($item, $key) {
            return $item['post_slug'];
        });
        $posts = $slugs->map(function ($item, $key) {
            return Post::find($item);
        });

        $combined = Report::all()->zip($posts)->map(function ($item) {
            return array_merge(...$item);
        })->toArray();

        return view('reportedPost', [
            'current' => 'Reported Post',
            "topiks" => Topik::all(),
            "reports" => $combined,
        ]);
    }

    public function searchPage(Request $request){
        return view('search', [
            'current' => 'Search Results',
            "topiks" => Topik::all(),
            'post' => Post::find('Title_lorem_ipsum')
        ]);
    }
}
