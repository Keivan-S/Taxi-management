<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    //
    public function car()
    {
        return $this->hasone(App/Bus);
    }
}
