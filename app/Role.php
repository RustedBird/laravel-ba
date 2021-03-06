<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User','role_user','role_id','id');
    }
}
