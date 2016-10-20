<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
         $this->call(UsersTableSeeder::class);
=======
        //$this->call(UsersTableSeeder::class);
        factory(\App\User::class,10)->create();

>>>>>>> 34143ee5ff6ddc5397a4109d92d80d337116d96b
    }
}
