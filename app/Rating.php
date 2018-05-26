<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

/**
 * ToiletBook\Rating
 *
 * @mixin \Eloquent
 */
class Rating extends Model
{
    protected $fillable = ['attribute_id', 'value'];

    protected $hidden = ['created_at', 'updated_at'];
    //
}
