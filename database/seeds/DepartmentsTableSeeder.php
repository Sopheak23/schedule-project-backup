<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Department::insert(array(
            //Faculty of Science
            array('department_name'=>'Biology','faculty_id'=>1),
            array('department_name'=>'Chemistry','faculty_id'=>1),
            array('department_name'=>'Computer Science','faculty_id'=>1),
            array('department_name'=>'Environmental Science','faculty_id'=>1),
            array('department_name'=>'Mathematics','faculty_id'=>1),
            array('department_name'=>'Physics','faculty_id'=>1),

            //Faculty of Social Science and Humanities
            array('department_name'=>'Geography','faculty_id'=>2),
            array('department_name'=>'History','faculty_id'=>2),
            array('department_name'=>'Khmer Literature','faculty_id'=>2),
            array('department_name'=>'Linguistics','faculty_id'=>2),
            array('department_name'=>'Media and Communication','faculty_id'=>2),
            array('department_name'=>'Philosophy','faculty_id'=>2),
            array('department_name'=>'Psychology','faculty_id'=>2),
            array('department_name'=>'Sociology','faculty_id'=>2),
            array('department_name'=>'Social Work','faculty_id'=>2),
            array('department_name'=>'Tourism','faculty_id'=>2),

            //Faculty of Engineering
            array('department_name'=>'Information Technology Engineering','faculty_id'=>3),
            array('department_name'=>'Telecommunication and Electronic Engineering','faculty_id'=>3),
            array('department_name'=>'Bioengineering','faculty_id'=>3),

            //Faculty of Development Studies
            array('department_name'=>'Community Development','faculty_id'=>4),
            array('department_name'=>'Economic Development','faculty_id'=>4),
            array('department_name'=>'Natural Resource Management and Development','faculty_id'=>4),
        
            //Faculty of Education
            array('department_name'=>'Educational Studies','faculty_id'=>5),
            array('department_name'=>'Higher Education Development and Management','faculty_id'=>5),
            array('department_name'=>'Lifelong Learning','faculty_id'=>5),
            array('department_name'=>'Center for Educational Research and Training','faculty_id'=>5)
        )); 
    }
}
