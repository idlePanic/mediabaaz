<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $fillable=['bio'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class,'cast_table' );
    }
}
