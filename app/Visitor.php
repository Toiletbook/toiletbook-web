<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

/**
 * ToiletBook\Visitor
 *
 * @property-read \ToiletBook\Washroom $visitors
 * @mixin \Eloquent
 */
class Visitor extends Model
{
    protected $fillable = ['washroom_id'];

    public function visitors() {
        return $this->belongsTo(Washroom::class);
    }
}

