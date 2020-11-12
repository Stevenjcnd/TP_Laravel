<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;

class comment extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $text = [
        'text',

    ];

    protected $hidden = [
        'user_id',
        'task_id',
    ];

    public function User()
    {
        return $this -> belongsTo('App\Models\User');
    }

    public function Task()
    {
        return $this->belongsTo(Task::class);
    }

}
