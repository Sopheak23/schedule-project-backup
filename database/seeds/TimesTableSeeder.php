<?php

use Illuminate\Database\Seeder;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([
            'time' => '7:00'
        ]);
        DB::table('times')->insert([
            'time' => '7:30'
        ]);
        DB::table('times')->insert([
            'time' => '8:00'
        ]);
    }
}
