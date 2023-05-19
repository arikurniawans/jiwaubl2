<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'password' => \Hash::make('12345678'),
                'isAdmin' => true,
                'roles' => 'superadmin'
            ],
            [
                'name' => 'Administrator',
                'email' => 'user@gmail.com',
                'password' => \Hash::make('12345678'),
                'isAdmin' => false,
                'roles' => 'admin'
            ]
        ]);
    }
}
