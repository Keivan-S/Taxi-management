<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusLine extends Model
{
    use SoftDeletes;
    public function cars()
    {
        return $this->hasMany(App/Bus);
    }

}
