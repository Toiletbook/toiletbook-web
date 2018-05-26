<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

class Washroom extends Model
{
    protected $fillable = ['name', 'location_description', 'establishment_id'];

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function attributes() {
        return $this->hasMany(Attribute::class);
    }
}
