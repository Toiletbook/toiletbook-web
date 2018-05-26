<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

/**
 * ToiletBook\Area
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\ToiletBook\Establishment[] $establishments
 * @mixin \Eloquent
 */
class Area extends Model
{
    protected $fillable = ['name'];

    protected $hidden = ['created_at', 'updated_at'];

    public function establishments() {
        return $this->hasMany(Establishment::class);
    }
}
