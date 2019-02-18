<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class PostSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1=User::where('name','member1')->first();
        $user2=User::where('name','member2')->first();
        $faker=Faker\Factory::create();

        for ($i=0; $i < 5; $i++) { 
            $post1=Post::create([
                'title'=>$faker->sentence(5),
                'body'=>$faker->text(1000),
                'user_id'=>$user1->id
                ]);
            $post2=Post::create([
                'title'=>$faker->sentence(5),
                'body'=>$faker->text(1000),
                'user_id'=>$user2->id
                ]);
        }
    }
}
