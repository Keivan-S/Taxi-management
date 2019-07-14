<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusLine extends Model
{
    public function cars()
    {
        return $this->hasMany(App/Bus);
    }

}
