<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Bus;

class BusLine extends Model
{
    use SoftDeletes;
    public function cars()
    {
        return $this->hasMany(Bus::class);
    }

}
