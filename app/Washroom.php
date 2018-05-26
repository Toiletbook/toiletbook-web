<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

/**
 * ToiletBook\Washroom
 *
 * @property-read \ToiletBook\Establishment $establishment
 * @property-read mixed $general_rating
 * @property-read mixed $visits
 * @property-read \Illuminate\Database\Eloquent\Collection|\ToiletBook\Visitor[] $visitors
 * @property-read \Illuminate\Database\Eloquent\Collection|\ToiletBook\Attribute[] $washroomAttributes
 * @mixin \Eloquent
 */
class Washroom extends Model {
    protected $fillable = ['name', 'location_description', 'establishment_id'];

    protected $appends = ['general_rating', 'visits', 'visitor_stats'];

    protected $casts = [
        'entry_amount' => 'float',
        'latitude'     => 'double',
        'longitude'    => 'double'
    ];

    protected $hidden = ['visitors'];

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function washroomAttributes()
    {
        return $this->hasMany(Attribute::class);
    }

    public function visitors()
    {
        return $this->hasMany(Visitor::class);
    }

    public function getGeneralRatingAttribute()
    {
        try {
            return floor($this->washroomAttributes->sum('average_rating') / $this->washroomAttributes->count() * 2) / 2;
        } catch (\DivisionByZeroError $e) {
            return 0;
        } catch (\ErrorException $e) {
            return 0;
        }
    }

    public function getVisitsAttribute()
    {
        return $this->visitors->count();
    }

    public function getVisitorStatsAttribute()
    {
        return \DB::table('visitors')->selectRaw('HOUR(created_at) as hour, count(1) as count')
                                     ->where('washroom_id', $this->id)->groupBy('hour')->orderBy('hour')->get()->toArray();
    }
}
