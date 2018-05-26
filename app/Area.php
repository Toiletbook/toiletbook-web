<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['name'];
    
    public function establishments() {
        return $this->hasMany(Establishment::class);
    }
}
