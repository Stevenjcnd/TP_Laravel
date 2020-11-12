<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'user_id'=> \App\Models\User::factory(),
            'task_id'=> \App\Models\Task::factory(),
        ];
    }
}
