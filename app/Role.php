<?php

namespace App;

use App\User;
use App\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    public function rpermissions(){
        return $this->belongsToMany(Permission::class,'permission_role');
    }
    public function rusers(){
        return $this->belongsToMany(User::class,'role_user');
    }

    /**
     * Checks if User has access to $role.
     */
    public function hasAccess(array $roles) : bool
    {
        // check if the permission is available in any role
        foreach ($this->roles as $role) {
            if($role->hasAccess($roles)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Checks if the user belongs to role.
     */
    public function inRole(string $roleSlug)
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }
}
