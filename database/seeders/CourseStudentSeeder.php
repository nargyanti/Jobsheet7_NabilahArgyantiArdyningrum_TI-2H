<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course_student = [
            [
                'student_id' => 3,
                'course_id' => 3,
                'value' => 70,
            ],
            [
                'student_id' => 1,
                'course_id' => 1,
                'value' => 90,
            ],
            [
                'student_id' => 1,
                'course_id' => 3,
                'value' => 80,
            ],
            [
                'student_id' => 5,
                'course_id' => 3,
                'value' => 83,
            ],
            [
                'student_id' => 5,
                'course_id' => 2,
                'value' => 89,
            ],
        ];

        DB::table('course_student')->insert($course_student);
    }
}
