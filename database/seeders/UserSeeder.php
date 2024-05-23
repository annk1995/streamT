<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Create a user with the role 'client'
        $client = new User();
        $client->name = 'Client User';
        $client->email = 'client@example.com';
        $client->password = Hash::make('password');
        $client->type = 'client';
        $client->save();

        // Create a user with the role 'talent'
        $talent = new User();
        $talent->name = 'Talent User';
        $talent->email = 'talent@example.com';
        $talent->password = Hash::make('password');
        $talent->type = 'talent';
        $talent->save();

        // Create a user with the role 'admin'
        $admin = new User();
        $admin->name = 'Admin User';
        $admin->email = 'admin@example.com';
        $admin->password = Hash::make('password');
        $admin->type = 'admin';
        $admin->save();

    }
}
