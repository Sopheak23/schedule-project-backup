<?php

use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert(array(
            array('day' => 'Monday'),
            array('day' => 'Tuesday'),
            array('day' => 'Wednesday'),
            array('day' => 'Thursday'),
            array('day' => 'Friday'),
            array('day' => 'Saturday')
        ));
    }
}
