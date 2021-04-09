<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = [
            [
                'course_name' => 'Pemrograman Berbasis Objek',
                'sks' => 3,
                'hours' => 6,
                'semester' => 4,
            ],
            [
                'course_name' => 'Pemrograman Web Lanjut',
                'sks' => 3,
                'hours' => 6,
                'semester' => 4,
            ],
            [
                'course_name' => 'Basis Data Lanjut',
                'sks' => 3,
                'hours' => 4,
                'semester' => 4,
            ],
            [
                'course_name' => 'Praktikum Basis Data Lanjut',
                'sks' => 3,
                'hours' => 6,
                'semester' => 4,
            ],
        ];
    }
}
