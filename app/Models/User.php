<?php

//JACQUENOD Steven B2A

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\board;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
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

    //Relation has many avec 'board'
    public function boards()
    {
        return $this->hasMany(Board::class);
    }
}
