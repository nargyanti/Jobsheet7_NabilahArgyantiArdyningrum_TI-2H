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
                'value' => 'A',
                'student_id' => 1941720083,
                'course_id' => 3,
            ],
            [
                'value' => 'B',
                'student_id' => 1941720083,
                'course_id' => 1,
            ],
            [
                'value' => 'B+',
                'student_id' => 1941720083,
                'course_id' => 2,
            ],
            [
                'value' => 'A',
                'student_id' => 1941720083,
                'course_id' => 4,
            ],
            [
                'value' => 'A',
                'student_id' => 1941720759,
                'course_id' => 3,
            ],
            [
                'value' => 'B+',
                'student_id' => 1941720759,
                'course_id' => 2,
            ],
        ];

        DB::table('course_student')->insert($course_student);
    }
}
