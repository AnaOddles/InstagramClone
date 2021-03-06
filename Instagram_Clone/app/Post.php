<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //A post has one user 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
