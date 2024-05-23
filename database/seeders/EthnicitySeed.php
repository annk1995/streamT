<?php

namespace Database\Seeders;

use App\Models\Ethnicity;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EthnicitySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ethinicities = [
            ['name' => 'Ebony'],
            ['name' => 'Asian'],
            ['name' => 'Arab'],
            ['name' => 'Indian'],
            ['name' => 'White'],
            ['name' => 'Latina']
        ];

        Ethnicity::insert($ethinicities);
    }
}
