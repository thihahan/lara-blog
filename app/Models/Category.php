<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function post(){
        // has one of many
//        return $this->hasOne(Post::class)->latestOfMany();
//        return $this->hasOne(Post::class)->oldestOfMany(); // first
//        return $this->hasOne(Post::class)->ofMany("user_id", "max");
//        return $this->hasOne(Post::class)->ofMany("user_id", "min");

        // one to one function

        return $this->hasOne(Post::class);
    }

    // one to many function
    public function posts(){
        return $this->hasMany(Post::class);
    }

    // one to many inverse
    public function user(){
        return $this->belongsTo(User::class);
    }
}
