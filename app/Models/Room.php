<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }
    public function booked(){
        return $this->belongsTo('App\Models\Booked');
    }

}
