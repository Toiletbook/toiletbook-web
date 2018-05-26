<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function washrooms()
    {
        return $this->hasMany(Washroom::class);
    }
}
