<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $countries =[
            [
                'name'=>'Kenya',
                'flag'=>'https://flagcdn.com/w320/ke.png'
            ],
            [
                'name'=>'Uganda',
                'flag'=>'https://flagcdn.com/w320/ug.png',
            ],
            [
                'name'=>'USA',
                'flag'=>'https://flagcdn.com/w320/us.png',
            ],
            [
                'name'=>'Tanzania',
                'flag'=>'https://flagcdn.com/w320/tz.png',
            ],
            [
                'name'=>'Zimbabwe',
                'flag'=>'https://flagcdn.com/w320/zm.png',
            ],
            [
                'name'=>'Colombia',
                'flag'=>'https://flagcdn.com/w320/co.png',
            ]
        ];
        Country::insert($countries);

    }
}
