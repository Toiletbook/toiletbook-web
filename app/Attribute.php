<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function establishment() {
        return $this->belongsTo(Establishment::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
    }
}
