<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function visitors() {
        return $this->belongsTo(Washroom::class);
    }
}
