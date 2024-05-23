<?php

namespace Database\Seeders;

use App\Models\Preference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreferenceSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $preferences = [
            ['name' => 'Girls'],
            ['name' => 'Couples'],
            ['name' => 'Guys'],
            ['name' => 'Trans']

        ];
        Preference::insert($preferences);
    }
}
