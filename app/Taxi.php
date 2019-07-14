<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxi extends Model
{
    //
    public function car()
    {
    use SoftDeletes;
        return $this->hasone(App/Bus);
    }
}
