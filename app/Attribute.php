<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

/**
 * ToiletBook\Attribute
 *
 * @property-read mixed $average_rating
 * @property-read \Illuminate\Database\Eloquent\Collection|\ToiletBook\Rating[] $ratings
 * @property-read \ToiletBook\Washroom $washroom
 * @mixin \Eloquent
 */
class Attribute extends Model
{
    protected $appends = ['average_rating'];

    protected $hidden = ['ratings', 'created_at', 'updated_at', 'washroom_id', 'id'];

    public function washroom() {
        return $this->belongsTo(Washroom::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
    }

    public function getAverageRatingAttribute()
    {
        try {
            return floor($this->ratings->sum('value') / $this->ratings->count() * 2) / 2;
        } catch (\DivisionByZeroError $e) {
            return 0;
        }
    }
}
