<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['name'];
    protected $appends = ['count'];

    public function users()
    {
        $this->hasMany(User::Class);
    }
    public function getCountAttribute(){
        if ($this->users()!=null)
            return $this->users()->count();
        else
                return 0;
    }
}
