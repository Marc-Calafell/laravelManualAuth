<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,100)->create();              // El numero que s'afegeix és per dir la quantitat d'usuaris a crear
    }
}
