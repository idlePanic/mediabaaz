<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    public function media()
    {
        return $this->belongsTo(Media::class,'media_id');
    }
}
