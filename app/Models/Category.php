<?php

//JACQUENOD Steven B2A

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Category extends Model
{
    use HasFactory;

    protected $text = [
        'name',
    ];

    //Relation has many avec 'task'
    public function Task()
    {
        return $this-> hasMany(Task::class);
    }
}
