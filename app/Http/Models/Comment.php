<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
