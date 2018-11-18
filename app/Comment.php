<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['body'];

    public function user()
    {
        return $this->belongsTo(User::class ,'user_id');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class,'movie_id');
    }

    public function product()
    {
        return $this->belongsTo(Music::class,'music_id');
    }
}
