<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'building_name', 
        'total_floors',
        'total_rooms',
        'total_rooms_per_floor'
    ];

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}
