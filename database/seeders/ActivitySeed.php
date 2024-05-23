<?php

namespace Database\Seeders;

use App\Http\Controllers\ActivitiesController;
use App\Models\activities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            ['name' => 'Anal'],
            ['name' => 'Gangbang'],
            ['name' => 'Squirting'],
            ['name' => 'Creampie'],
            ['name' => 'SexToys'],
            ['name' => 'Fisting'],
            ['name' => 'BDSM'],
            ['name' => 'Blowjob'],
            ['name' => 'Orgasm'],
            ['name' => 'Shower'],
            ['name' => 'TittyFuck'],
            ['name' => 'Pegging'],
            ['name' => 'DP'],
            ['name' => 'Fingering'],
            ['name' => 'Flashing'],
            ['name' => 'Gape'],
            ['name' => 'Masturbation'],
            ['name' => 'Scissoring']
        ];
        activities::insert($activities);

    }
}
