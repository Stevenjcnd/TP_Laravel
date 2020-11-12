<?php

//JACQUENOD Steven B2A

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachment extends Model
{
    use HasFactory;

    //Relation belongs to avec 'user'
    public function user()
    {
        return $this -> belongsTo('App\Models\User');
    }

    //Relation belongs to avec 'task'
    public function task()
    {
        return $this -> belongsTo('App\Models\Task');
    }
}
