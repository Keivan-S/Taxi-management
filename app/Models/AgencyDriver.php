<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgencyDriver extends Model
{
    use SoftDeletes;
    public function driver()
    {
        return $this->belongsTo(App/Models/User);
    }
    public function car()
    {
        return $this->belongsTo(App/Models/Car);
    }
    public function agency()
    {
        return $this->belongsTo(App/Models/Agency);
    }
}
