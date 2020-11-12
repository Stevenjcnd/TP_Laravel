<?php

//JACQUENOD Steven B2A

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public  $text = [
        'title',
        'Description',
        'state',
    ];

    protected $hidden = [
        'user_id',
        'task_id',
    ];

    //Relation has many avec 'comment'
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //Relation has many avec 'attachment'
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    //Relation belongs to avec 'board'
    public function board()
    {
        return $this -> belongsTo('App\Models\Board');
    }

    //Relation belongs to avec 'category'
    public function category()
    {
        return $this -> belongsTo('App\Models\Category');
    }
}
