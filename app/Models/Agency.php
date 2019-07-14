<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use SoftDeletes;

    public function owner()
    {
        return $this->belongsTo(App/User);
    }

    public function drivers()
    {
        return $this->hasMany(App/AgencyDriver);
    }
}
