<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = [
            ['class_name' => 'TI-2A',],
            ['class_name' => 'TI-2B',],
            ['class_name' => 'TI-2C',],
            ['class_name' => 'TI-2D',],
            ['class_name' => 'TI-2E',],
            ['class_name' => 'TI-2F',],
            ['class_name' => 'TI-2G',],
            ['class_name' => 'TI-2H',],
            ['class_name' => 'TI-2I',],
        ];

        DB::table('class')->insert($class);
    }
}
