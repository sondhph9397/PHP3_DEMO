<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('teacher')->count() === 0) {
            DB::table('teacher')->insert([
                [
                    'name' => 'Do Hong Son',
                    'phone' => '0123456789',
                    'age' => 24,
                    'gender' => 1,
                ],
                [
                    'name' => 'Do Hong Minh',
                    'phone' => '0123456789',
                    'age' => 24,
                    'gender' => 0,
                ]
            ]);
        } else {
            echo 'bang nay da co du lieu' . PHP_EOL;
        }
    }
}
