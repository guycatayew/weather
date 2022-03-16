<?php

namespace Database\Seeders;

use App\Models\City;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'city_name' => 'Abu Dhabi',
            'country' => 'UAE',
            'user_id' => 1
        ]);
        City::create([
            'city_name' => 'Dubai',
            'country' => 'UAE',
            'user_id' => 1
        ]);
        City::create([
            'city_name' => 'Sharjah',
            'country' => 'UAE',
            'user_id' => 1
        ]);
    }
}
