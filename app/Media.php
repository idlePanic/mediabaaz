<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function movies()
    {
        return $this->hasMany(Movie::class );
    }

    public function musics()
    {
        return $this->hasMany(Music::class);
    }
}
