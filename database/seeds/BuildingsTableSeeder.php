<?php

use Illuminate\Database\Seeder;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Building::insert([
            'building_name'=>Str::random(1),
            'total_floors'=>rand(1,6),
            'total_rooms'=>rand(10,120),
            'total_rooms_per_floor'=>rand(5,20)
        ]);
        \App\Building::insert([
            'building_name'=>Str::random(1),
            'total_floors'=>rand(1,6),
            'total_rooms'=>rand(10,120),
            'total_rooms_per_floor'=>rand(5,20)
        ]);
        \App\Building::insert([
            'building_name'=>Str::random(1),
            'total_floors'=>rand(1,6),
            'total_rooms'=>rand(10,120),
            'total_rooms_per_floor'=>rand(5,20)
        ]);
    }
}
