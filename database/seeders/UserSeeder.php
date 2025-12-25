<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['id' => '1', 'name' => 'Admin', 'email' => 'admin@samiohome.com', 'password' => 'adminaccount'],
            ['id' => '2', 'name' => 'Demo Account', 'email' => 'demo@samiohome.com', 'password' => 'demoaccount'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['id' => $user['id']], // so you can run seeder multiple times
                [
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'email_verified_at' => now(),
                    'password' => $user['password'],
                    'remember_token' => Str::random(10),
                ]
            );
        }

        // Example: generate 3 random users
        User::factory()->count(3)->create();
    }
}
