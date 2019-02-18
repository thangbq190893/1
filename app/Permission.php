<?php

namespace App;

use App\Role;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    public function proles(){
        return $this->belongsToMany(Role::class,'permission_role');
    }
    
}
