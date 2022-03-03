<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Message, User, Topic};


class Topic extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'user_id',
        'description',
    ];



    /**
     * Get the comments for the blog post.
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
