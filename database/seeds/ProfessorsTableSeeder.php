<?php

use Illuminate\Database\Seeder;

class ProfessorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Professor::insert([
            'professor_name'=>Str::random(25)
        ]);
        \App\Professor::insert([
            'professor_name'=>Str::random(25)
        ]);
        \App\Professor::insert([
            'professor_name'=>Str::random(25)
        ]);
    }
}
