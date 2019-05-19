<?php

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Faculty::insert(array(
            array('faculty_name'=>'Faculty of Science'),
            array('faculty_name'=>'Faculty of Social Science and Humanities'),
            array('faculty_name'=>'Faculty of Engineering'),
            array('faculty_name'=>'Faculty of Development Studies'),
            array('faculty_name'=>'Faculty of Education')
        ));
    }
}
