<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_courses')->insert([
            'course_title'  => 'Core PHP',
            'course_descr'  => 'Training for Core PHP',
            'level'         => 'Basic',
            'duration'      => '1 week'
            ]);
        DB::table('training_courses')->insert([
            'course_title'  => 'JavaScript',
            'course_descr'  => 'Basic JavaScript',
            'level'         => 'Basic',
            'duration'      => '1 week'
            ]);
        DB::table('training_courses')->insert([
            'course_title'  => 'CodeIgniter',
            'course_descr'  => 'CodeIgniter Training',
            'level'         => 'Intermediate',
            'duration'      => '2 weeks'
            ]);
       

       
    }
}
