<?php

namespace Database\Seeders;

use App\Models\Age;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ages = [
            // // ['age' => '18+'],
            // // ['age' => '22+'],
            // // ['age' => '40+'],
            // ['age' => '50+']

                ['age' => '18+', 'label' => 'teen'],
                ['age' => '22+', 'label' => 'young'],
                ['age' => '40+', 'label' => 'MILF'],
                ['age' => '50+', 'label' => 'granny']

        ];
          Age::insert($ages);

    }
}
