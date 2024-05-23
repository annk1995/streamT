<?php

namespace Database\Seeders;

use App\Models\Body;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bodies = [
            ['name' => 'Skinny'],
            ['name' => 'Athletic'],
            ['name' => 'Medium'],
            ['name' => 'Indian'],
            ['name' => 'Curvy'],
            ['name' => 'BBW']
        ];

      Body::insert($bodies);
    }
}
