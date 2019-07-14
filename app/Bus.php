<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    public function driver()
    {
        return $this->belongsTo(App/User);
    }
    public function car()
    {
        return $this->belongsTo(App/Car);
    }
    public function owner()
    {
        return $this->belongsTo(App/BusLine);
    }
}
