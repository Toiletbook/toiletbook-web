<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function establishments() {
        return $this->hasMany(Establishment::class);
    }
}
