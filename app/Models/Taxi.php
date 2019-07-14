<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Bus;

class Taxi extends Model
{
    use SoftDeletes;

    public function car()
    {

        return $this->hasone(Bus::class);
    }
}
