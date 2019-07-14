<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vac extends Model
{
    use SoftDeletes;
    public function driver()
    {
        return $this->belongsTo(App/User);
    }
}
