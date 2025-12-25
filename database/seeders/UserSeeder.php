<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['id' => '1', 'name' => 'Demo Account', 'email' => 'demo@samiohome.com', 'password' => 'demoaccount'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['id' => $user['id']], // so you can run seeder multiple times
                [
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'password' => $user['password'],
                ]
            );
        }
    }
}
