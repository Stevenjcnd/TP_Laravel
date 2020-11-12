<?php

//JACQUENOD Steven B2A

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\User;

class BoardUser extends Model
{
    use HasFactory;

    //Relation belongs to avec 'user'
    public function User()
    {
        return $this -> belongsTo('App\Models\User');
    }

    //Relation has many avec 'task'
    public function Tasks()
    {
        return $this-> hasMany('App\Models\Task');
    }

    //Relation belongs to avec 'board'
    public function Board()
    {
        return $this -> belongsTo('App\Models\Board');
    }
}
