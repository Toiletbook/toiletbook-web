<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

class Washroom extends Model
{
    protected $fillable = ['name', 'location_description', 'establishment_id'];

    protected $appends = ['general_rating'];

    protected $casts = [
        'entry_amount' => 'float',
        'latitude' => 'double',
        'longitude' => 'double'
    ];

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function washroomAttributes() {
        return $this->hasMany(Attribute::class);
    }

    public function getGeneralRatingAttribute()
    {
        try {
            return floor($this->washroomAttributes->sum('average_rating') / $this->washroomAttributes->count() * 2) / 2;
        } catch (\DivisionByZeroError $e) {
            return 0;
        } catch(\ErrorException $e) {
            return 0;
        }
    }
}
