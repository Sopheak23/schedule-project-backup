<?php

use Illuminate\Database\Seeder;

class DeptProfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dept_prof')->insert(array(
            array('professor_id' => 1, 'department_id' => 3),
            array('professor_id' => 1, 'department_id' => 17),
            array('professor_id' => 2, 'department_id' => 1),
            array('professor_id' => 2, 'department_id' => 19),
            array('professor_id' => 3, 'department_id' => 15),
            array('professor_id' => 3, 'department_id' => 20)
        ));
    }
}
