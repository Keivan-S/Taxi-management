<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vac extends Model
{
    use SoftDeletes;
    public function driver()
    {
        return $this->belongsTo(App/Models/User);
    }
}
