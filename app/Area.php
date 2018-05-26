<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['name'];

    protected $hidden = ['created_at', 'updated_at'];

    public function establishments() {
        return $this->hasMany(Establishment::class);
    }
}
