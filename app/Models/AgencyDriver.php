<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Models\Car;
use App\Models\Agency;

class AgencyDriver extends Model
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
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
