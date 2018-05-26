<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

/**
 * ToiletBook\Establishment
 *
 * @property-read \ToiletBook\Area $area
 * @property-read \Illuminate\Database\Eloquent\Collection|\ToiletBook\Washroom[] $washrooms
 * @mixin \Eloquent
 */
class Establishment extends Model {

    protected $fillable = ['name'];

    protected $hidden = ['created_at', 'updated_at', 'area_id'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function washrooms()
    {
        return $this->hasMany(Washroom::class);
    }
}
