<?php

//JACQUENOD Steven B2A

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        //Récupération de la donnée de la table 'categories'
        return [
            'name'=> $this->faker->name,
        ];
    }
}
