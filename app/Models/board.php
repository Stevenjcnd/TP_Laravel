<?php

//JACQUENOD Steven B2A

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class board extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'description',
    ];

    //Relation has many avec 'task'
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    //Relation belongs to many avec 'user'
    public function users()
    {
        return $this -> belongsToMany('App\Models\User');
    }

}
