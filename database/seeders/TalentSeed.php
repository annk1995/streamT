<?php

namespace Database\Seeders;

use App\Models\Talent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TalentSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $talents = [
            [
                'username' => 'user1',
                'email' => 'user1@example.com',
                'password' => bcrypt('password'),
                'dob' => '1990-01-01',
                'address' => '123 Main St, Nairobi',
                'phone' => '+254712345678',
                'profile_picture' => 'path/to/profile1.jpg',
                'identification_card' => 'path/to/id1.jpg',
                'face_picture' => 'path/to/face1.jpg',
                'ethnicity_id' => 1,
                'gender_id' => 2,
                'country_id' => 2,
                'body_id' => 3,
                'age_id' => 3,
            ],
            // Add more sample data as needed
        ];
        foreach ($talents as $talent) {
            Talent::create($talent);
        }
    }

   
}
