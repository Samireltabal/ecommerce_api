<?php

use Illuminate\Database\Seeder;

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
        DB::table('roles')->insert([
            'name' => 'admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'member',
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('secret'),
            'role_id' => 1,
        ]);    
    }
}
