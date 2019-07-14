<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Models\AgencyDriver;

class Agency extends Model
{
    use SoftDeletes;

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function drivers()
    {
        return $this->hasMany(AgencyDriver::class);
    }
}
