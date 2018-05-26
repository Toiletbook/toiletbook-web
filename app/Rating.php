<?php

namespace ToiletBook;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['attribute_id', 'value'];
    //
}
