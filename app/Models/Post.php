<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'content', 'user_id'];

    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }

    public function user()
    {
        return $this->belnogTo(User::class);
    }
}
