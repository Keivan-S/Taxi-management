<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgencyDriver extends Model
{
    use SoftDeletes;
    public function driver()
    {
        return $this->belongsTo(App/User);
    }
    public function car()
    {
        return $this->belongsTo(App/Car);
    }
    public function agency()
    {
        return $this->belongsTo(App/Agency);
    }
}
