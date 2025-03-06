<?php

namespace Database\Seeders;

use App\Models\User;
use App\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $user = User::whereEmail(User::DEFAULT_USER_EMAIL)->first();
        if (null == $user) {
            // create the test account
            User::factory()->create([
                'name' => 'Snapnet Admin',
                'email' => User::DEFAULT_USER_EMAIL,
                'password' => Hash::make("admin@123"),
                'role' => UserRole::Admin->value,
            ]);
        }
    }
}
