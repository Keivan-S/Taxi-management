<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxi extends Model
{
    use SoftDeletes;

    public function car()
    {

        return $this->hasone(App/Models/Bus);
    }
}
