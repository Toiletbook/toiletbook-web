<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

class Washroom extends Model
{
    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }
}
