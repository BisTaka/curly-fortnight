<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class First extends Model
{
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
