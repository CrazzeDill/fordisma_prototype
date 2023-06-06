<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $posts = [
            [
                'title' => 'First Post',
                'slug' => 'first-post',
                'author' => 'John Doe',
                'topic' => 'Technology',
                'role' => 'post',
                'content' => 'This is the content of the first post.',
                'replies' => 2,
                'likes' => 5,
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                "title" => "Title Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, mollitia.",
                "slug" => "Title_lorem_ipsum",
                "author" => "agnesWu",
                "published_at" => "01/01/2023",
                "topic" => "UKM dan Organisasi",
                'role' => 'post',
                "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta autem sit neque, sint commodi porro, odit distinctio corrupti nam aliquid blanditiis, ut laudantium. Qui vero maiores quisquam aperiam libero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet consequatur beatae adipisci ad rerum fugit recusandae temporibus facilis aliquam! Officia exercitationem incidunt obcaecati cum quis necessitatibus accusamus ex quisquam sapiente.",
                "replies" => 2,
                "likes" => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                "title" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero itaque recusandae optio.",
                "slug" => "Lorem, ipsum dolor.",
                "author" => "Odista",
                "published_at" => "01/01/2023",
                "topic" => "UKM dan Organisasi",
                'role' => 'post',
                "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta autem sit neque, sint commodi porro, odit distinctio corrupti nam aliquid blanditiis, ut laudantium. Qui vero maiores quisquam aperiam libero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet consequatur beatae adipisci ad rerum fugit recusandae temporibus facilis aliquam! Officia exercitationem incidunt obcaecati cum quis necessitatibus accusamus ex quisquam sapiente. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem aspernatur fuga ex atque. Nihil, quibusdam cumque porro laudantium, asperiores voluptatem eius accusamus non impedit quos voluptatum doloribus officia, nemo voluptates!
                Corrupti quia vero tempora minima unde fugit deleniti iusto eum mollitia, saepe deserunt sit nihil consequatur velit reprehenderit voluptatibus rem sapiente? Optio iure deserunt recusandae soluta dolorum adipisci ipsa error!",
                "replies" => 3,
                "likes" => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($posts as $post) {
            $createdPost = Post::create($post);

            // Create sample replies for each post
            for ($i = 1; $i <= $post['replies']; $i++) {
                $reply = new Post([
                    'title' => "Reply {$i} for {$createdPost->title}",
                    'author' => 'John Doe', // Set the author as needed
                    'role' => 'reply',
                    "topic" => "{{$createdPost->topic}}",
                    'content' => "This is the content of reply {$i} for {$createdPost->title}.",
                    'likes' => 0, // Set initial likes as needed
                    'published_at' => Carbon::now(),
                ]);

                $reply->parent_id = $createdPost->id;
                $reply->save();
            }
        }
    }
}
