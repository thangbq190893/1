<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
        	[
        		'name' => 'role-list',
        		'display_name' => 'Display Role Listing',
        		'description' => 'See only Listing Of Role'
        	],
        	[
        		'name' => 'role-create',
        		'display_name' => 'Create Role',
        		'description' => 'Create New Role'
        	],
        	[
        		'name' => 'role-edit',
        		'display_name' => 'Edit Role',
        		'description' => 'Edit Role'
        	],
        	[
        		'name' => 'role-delete',
        		'display_name' => 'Delete Role',
        		'description' => 'Delete Role'
        	],
        	[
        		'name' => 'post-list',
        		'display_name' => 'Display Item Listing',
        		'description' => 'See only Listing Of Item'
        	],
        	[
        		'name' => 'post-create',
        		'display_name' => 'Create Item',
        		'description' => 'Create New Item'
        	],
        	[
        		'name' => 'post-edit',
        		'display_name' => 'Edit Item',
        		'description' => 'Edit Item'
        	],
        	[
        		'name' => 'post-delete',
        		'display_name' => 'Delete Item',
        		'description' => 'Delete Item'
        	]
        ];
        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
