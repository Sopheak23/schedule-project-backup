<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Room::insert([
            'room_name'=>Str::random(3),
            'total_students'=>rand(50,150),
            'building_id'=>1
        ]);
        \App\Room::insert([
            'room_name'=>Str::random(3),
            'total_students'=>rand(50,150),
            'building_id'=>1
        ]);
        \App\Room::insert([
            'room_name'=>Str::random(3),
            'total_students'=>rand(50,150),
            'building_id'=>1
        ]);
        \App\Room::insert([
            'room_name'=>Str::random(3),
            'total_students'=>rand(50,150),
            'building_id'=>2
        ]);
    }
}
