<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model

{
    public function visitors() {
        return $this->belongsTo(Washroom::class);
    }
}

