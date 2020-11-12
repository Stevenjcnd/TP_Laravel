<?php

//JACQUENOD Steven B2A

namespace Database\Factories;

use App\Models\TaskUser;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskUserFactory extends Factory
{
    protected $model = TaskUser::class;

    public function definition()
    {
        //Récupération des données de la table 'taskusers'
        return [
            'user_id'=> \App\Models\User::factory(),
            'task_id'=> \App\Models\Task::factory(),
        ];
    }
}
