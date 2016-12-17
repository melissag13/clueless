<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
    	// the relation of Role because it maybe assigned to many users
    	return $this->belongsToMany('App\User', 'user_role', 'role_id', 'user_id');  
    }
}
