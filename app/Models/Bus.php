<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Models\Car;
use App\Models\BusLine;

class Bus extends Model
{
    use SoftDeletes;
    public function driver()
    {
        return $this->belongsTo(User::class);
    }
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
    public function owner()
    {
        return $this->belongsTo(BusLine::class);
    }
}
