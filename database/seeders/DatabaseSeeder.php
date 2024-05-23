<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\Preference;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CountriesSeed::class,
            AgeSeed::class,
            EthnicitySeed::class,
            BodySeed::class,
            ActivitySeed::class,
           FetishSeed::class,
           PreferenceSeed::class,
            GenderSeed::class
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
