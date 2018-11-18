<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function movie()
    {
        return $this->belongsTo(Movie::class,'movie_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

//
    public function owns($related)
    {
        return $this->movie_id == $related->id;
    }

//    public function like_movie($related_movie)
//    {
//        return $this->movie_id == $related_movie->id;
//    }
//
//    public function like_user($related_user)
//    {
//        return $this->user_id != $related_user->id;
//    }
}
