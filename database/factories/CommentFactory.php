<?php

namespace Database\Factories;

use App\Models\Post;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'body'=>[],
            'user_id'=>FactoryHelper::getRandomModelId(User::class),
            'post_id'=>FactoryHelper::getRandomModelId(Post::class),
        ];
    }
}
