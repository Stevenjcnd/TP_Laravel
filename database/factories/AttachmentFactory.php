<?php

//JACQUENOD Steven B2A

namespace Database\Factories;

use App\Models\Attachment;
use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttachmentFactory extends Factory
{
    protected $model = Attachment::class;

    public function definition()
    {
        //Récupération des données de la table 'attachments'
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
