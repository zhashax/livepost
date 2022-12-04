<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        $posts = Post::factory(3)
        // ->has(Comment::factory(3),'comments')
        ->untitled()
        ->create();

        $posts->each(function ($post) {
            $post->users()->sync([FactoryHelper::getRandomModelId(User::class)]);
        });

    }
}
