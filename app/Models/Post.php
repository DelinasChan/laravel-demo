<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends Model
{
    use HasFactory;
    use LogsActivity;
    protected $fillable = ['id', 'content', 'user_id'];

    protected $with = ['comments'];
    protected static $logAttributes = ['content', 'user_id'];

    protected static $logName = 'post_activity';

    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }

    public function user()
    {
        return $this->belnogTo(User::class);
    }
}
