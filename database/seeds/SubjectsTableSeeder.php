<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Subject::insert([
            'subject_name'=>Str::random(25)
        ]);
        \App\Subject::insert([
            'subject_name'=>Str::random(25)
        ]);
        \App\Subject::insert([
            'subject_name'=>Str::random(25)
        ]);
    }
}
