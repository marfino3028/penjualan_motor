<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => "IIS",
            'username' => "iis@mdp.ac.id",
            'password' => Hash::make('secret'),
            'user_role' => 1,
        ]);
        
    }
}
