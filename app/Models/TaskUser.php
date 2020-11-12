<?php

//JACQUENOD Steven B2A

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;

class TaskUser extends Model
{
    use HasFactory;

    //Relation belongs to avec 'task'
    public function Task()
    {
        return $this -> belongsTo('App\Models\Task');
    }

    //Relation belongs to avec 'user'
    public function User()
    {
        return $this -> belongsTo('App\Models\User');
    }
}
