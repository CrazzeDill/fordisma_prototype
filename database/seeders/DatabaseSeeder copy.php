<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create([
            "title" => "Title Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, mollitia.",
            "slug" => "Title_lorem_ipsum",
            "author" => "agnesWu",
            "published_at" => "01/01/2023",
            "topic" => "UKM dan Organisasi",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta autem sit neque, sint commodi porro, odit distinctio corrupti nam aliquid blanditiis, ut laudantium. Qui vero maiores quisquam aperiam libero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet consequatur beatae adipisci ad rerum fugit recusandae temporibus facilis aliquam! Officia exercitationem incidunt obcaecati cum quis necessitatibus accusamus ex quisquam sapiente.",
            "replies" => 27,
            "likes" => 27
        ]);
        
        Post::create([
            "title" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero itaque recusandae optio.",
            "slug" => "Lorem, ipsum dolor.",
            "author" => "Odista",
            "published_at" => "01/01/2023",
            "topic" => "UKM dan Organisasi",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta autem sit neque, sint commodi porro, odit distinctio corrupti nam aliquid blanditiis, ut laudantium. Qui vero maiores quisquam aperiam libero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet consequatur beatae adipisci ad rerum fugit recusandae temporibus facilis aliquam! Officia exercitationem incidunt obcaecati cum quis necessitatibus accusamus ex quisquam sapiente. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem aspernatur fuga ex atque. Nihil, quibusdam cumque porro laudantium, asperiores voluptatem eius accusamus non impedit quos voluptatum doloribus officia, nemo voluptates!
            Corrupti quia vero tempora minima unde fugit deleniti iusto eum mollitia, saepe deserunt sit nihil consequatur velit reprehenderit voluptatibus rem sapiente? Optio iure deserunt recusandae soluta dolorum adipisci ipsa error!",
            "replies" => 69,
            "likes" => 42
        ]);
    }
}
