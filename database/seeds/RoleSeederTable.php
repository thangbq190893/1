<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class RoleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission1=Permission::where('name', 'role-list')->first();
        $permission2=Permission::where('name', 'role-create')->first();
        $permission3=Permission::where('name', 'role-edit')->first();
        $permission4=Permission::where('name', 'role-delete')->first();
        $permission5=Permission::where('name', 'post-list')->first();
        $permission6=Permission::where('name', 'post-create')->first();
        $permission7=Permission::where('name', 'post-edit')->first();
        $permission8=Permission::where('name', 'post-delete')->first();

        $admin=Role::create([
            'name' => 'admin',
            'display_name'=>'is a admin',
            'description'=>'all permissions'
        ]);
        $admin->rpermissions()->attach($permission1);
        $admin->rpermissions()->attach($permission2);
        $admin->rpermissions()->attach($permission3);
        $admin->rpermissions()->attach($permission4);
        


        $mod=Role::create([
            'name' => 'mod',
            'display_name'=>'Moderator',
            'description'=>'all permissions for post'
        ]);
        $mod->rpermissions()->attach($permission5);
        $mod->rpermissions()->attach($permission8);


        $member=Role::create([
            'name' => 'member',
            'display_name'=>'Member',
            'description'=>'create, delete, edit posst '
        ]);
        $member->rpermissions()->attach($permission6);
        $member->rpermissions()->attach($permission7);
        
    }
}
