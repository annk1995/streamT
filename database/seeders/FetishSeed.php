<?php

namespace Database\Seeders;

use App\Models\Fetish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FetishSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fetishes = [
            ['name' => 'Asstomouth'],
            ['name' => 'Schoolgirl'],
            ['name' => 'Goth'],
            ['name' => 'Outdoor'],
            ['name' => 'Swingers']

        ];
        Fetish::insert($fetishes);
    }
}
