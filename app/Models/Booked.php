<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booked extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users(){
        return $this->hasOne('App\Models\User');
    }
    public function room(){
        return $this->hasOne('App\Models\Room','id', 'room_id');
    }

    public function checkin(){
        return $this->hasOne('App\Models\CheckIn');
    }
    public function checkout(){
        return $this->hasOne('App\Models\CheckOut');
    }
}
