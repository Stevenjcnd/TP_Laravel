<?php

namespace Database\Factories;

use App\Models\Attachment;
use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttachmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attachment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'file' => $this->faker->word,
            'filename' => $this->faker->text,
            'size' => $this->faker->randomDigit,
            'type'=> $this->faker->mimeType,
            'user_id'=> \App\Models\User::factory(),
            'task_id'=> \App\Models\Task::factory(),
        ];
    }
}
