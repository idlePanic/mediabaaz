<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable=['description'];

    public function media()
    {
        return $this->belongsTo(Media::class,'media_id');
    }

    public function like()
    {
        return $this->belongsToMany(User::class,'likes','user_id','movie_id');
    }

    public function casts()
    {
        return $this->belongsToMany(Cast::class );
    }

    public function director()
    {
        return $this->belongsTo(Director::class ,'director_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class , 'genre_movie');
    }
}
