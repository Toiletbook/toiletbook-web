<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model {
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function washrooms()
    {
        return $this->hasMany(Washroom::class);
    }

    public function attriibutes()
    {
        return $this->hasMany(Attribute::class);
    }
}
