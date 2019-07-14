<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bus extends Model
{
    use SoftDeletes;
    public function driver()
    {
        return $this->belongsTo(App/Models/User);
    }
    public function car()
    {
        return $this->belongsTo(App/Models/Car);
    }
    public function owner()
    {
        return $this->belongsTo(App/Models/BusLine);
    }
}
