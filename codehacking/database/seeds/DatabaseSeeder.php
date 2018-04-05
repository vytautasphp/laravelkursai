<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);

         DB::statement('SET FOREIGN_KEY_CHECKS=0');
         DB::table('users')->truncate();
         DB::table('posts')->truncate();

         factory(App\User::class, 10)->create()->each(function($user){

         //factory(App\Post::class, 10)->create();
         
            $user->posts()->save(factory(App\Post::class)->make());

         });
   }
}
