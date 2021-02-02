<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //One to one relationship with profile
    
    //Profile also contains a user model 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
