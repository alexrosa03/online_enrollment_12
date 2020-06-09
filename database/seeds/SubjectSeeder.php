<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SubjectSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name' => 'English 101',
            'room' => 'LB305TC',
            'schedule' => 'MFW 10:30-11:30',
            'capacity' => 50,
            'enrollees' => 0
        ]);

        DB::table('subjects')->insert([
            'name' => 'Web dev 2',
            'room' => 'LB467TC',
            'schedule' => 'TTH 9:00-12:00',
            'capacity' => 30,
            'enrollees' => 0
        ]);
    }
}