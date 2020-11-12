<?php

//JACQUENOD Steven B2A

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;

class comment extends Model
{
    use HasFactory;

    public $text = [
        'text',

    ];

    protected $hidden = [
        'user_id',
        'task_id',
    ];

    //Relation belongs to avec 'user'
    public function User()
    {
        return $this -> belongsTo('App\Models\User');
    }

    //Relation belongs to avec 'task'
    public function Task()
    {
        return $this->belongsTo(Task::class);
    }

}
