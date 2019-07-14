<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencyDriver extends Model
{
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
