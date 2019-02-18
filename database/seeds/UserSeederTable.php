<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::where('name','admin')->first();
        $role2=Role::where('name','mod')->first();
        $role3=Role::where('name','member')->first();

        // $user1=User::create([
        //     'name' => 'member1',
        //     'email'=>'member1@gmail.com',
        //     'password'=>bcrypt('thang123')
        //     ]);
        // $user1->urole()->attach($role3);

        // $user2=User::create([
        //     'name' => 'moderator1',
        //     'email'=>'mod1@gmail.com',
        //     'password'=>bcrypt('thang123')
        //     ]);
        // $user2->urole()->attach($role2);

        // $user3=User::create([
        //     'name' => 'admin1',
        //     'email'=>'admin1@gmail.com',
        //     'password'=>bcrypt('thang123')
        //     ]);
        // $user3->urole()->attach($role3);
        // $user3->urole()->attach($role2);
        // $user3->urole()->attach($role1);


        $user4=User::create([
            'name' => 'member2',
            'email'=>'member2@gmail.com',
            'password'=>bcrypt('thang123')
            ]);
        $user4->urole()->attach($role3);

        
    }
}
