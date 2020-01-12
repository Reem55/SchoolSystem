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

         $user = \App\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 123456,
        ]);

    }
}
