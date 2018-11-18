<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable=['bio'];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
