<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Message, User, Topic};


class Message extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
        'user_id',
        'topic_id',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo(Topic::class);
    }

}
