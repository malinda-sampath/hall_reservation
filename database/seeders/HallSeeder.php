<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallSeeder extends Seeder
{
    public function run()
    {
        DB::table('halls')->insert([
            [
                'hall_id' => 'Hall01',
                'level' => '1',
                'subject_id' => 'CS101',
                'date' => '2024-08-10',
                'time' => '10:00:00',
                'is_visible' => true,
                'message' => 'Intro to Computer Science'
            ],
            [
                'hall_id' => 'Hall02',
                'level' => '2',
                'subject_id' => 'CS201',
                'date' => '2024-08-11',
                'time' => '12:00:00',
                'is_visible' => true,
                'message' => 'Data Structures'
            ],
            [
                'hall_id' => 'Hall03',
                'level' => '3',
                'subject_id' => 'CS301',
                'date' => '2024-08-12',
                'time' => '14:00:00',
                'is_visible' => true,
                'message' => 'Algorithms'
            ],
            [
                'hall_id' => 'Hall04',
                'level' => '4',
                'subject_id' => 'CS401',
                'date' => '2024-08-13',
                'time' => '16:00:00',
                'is_visible' => true,
                'message' => 'Operating Systems'
            ],
            [
                'hall_id' => 'Hall05',
                'level' => '1',
                'subject_id' => 'CS102',
                'date' => '2024-08-14',
                'time' => '10:00:00',
                'is_visible' => true,
                'message' => 'Intro to Programming'
            ],
            [
                'hall_id' => 'Hall06',
                'level' => '2',
                'subject_id' => 'CS202',
                'date' => '2024-08-15',
                'time' => '12:00:00',
                'is_visible' => true,
                'message' => 'Database Systems'
            ],
            [
                'hall_id' => 'Hall07',
                'level' => '3',
                'subject_id' => 'CS302',
                'date' => '2024-08-16',
                'time' => '14:00:00',
                'is_visible' => true,
                'message' => 'Computer Networks'
            ],
            [
                'hall_id' => 'Hall08',
                'level' => '4',
                'subject_id' => 'CS402',
                'date' => '2024-08-17',
                'time' => '16:00:00',
                'is_visible' => true,
                'message' => 'Artificial Intelligence'
            ],
            [
                'hall_id' => 'Hall09',
                'level' => '1',
                'subject_id' => 'CS103',
                'date' => '2024-08-18',
                'time' => '10:00:00',
                'is_visible' => true,
                'message' => 'Discrete Mathematics'
            ],
            [
                'hall_id' => 'Hall10',
                'level' => '2',
                'subject_id' => 'CS203',
                'date' => '2024-08-19',
                'time' => '12:00:00',
                'is_visible' => true,
                'message' => 'Software Engineering'
            ],
        ]);
    }
}
