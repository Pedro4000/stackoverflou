<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Message, User, Topic};


class User extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'fistname',
        'lastname',
        'nickname',
        'password',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }


    /**
     * Get the comments for the blog post.
     */
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

}
