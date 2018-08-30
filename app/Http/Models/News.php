<?php

namespace App\http\Models;

use App\http\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
