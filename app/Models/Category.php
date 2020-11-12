<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $text = [
        'name',
    ];

    /**
     * Renvoi la liste des tâches possédant cette catégorie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Task()
    {
        return $this-> hasMany(Task::class);
    }
}
