<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'id' => 18102345,
            'first_name' => 'john',
            'last_name' => 'doe',
            'birthday' => '10/11/1999',
            'course' => 'BSCS'
        ]);

        DB::table('students')->insert([
            'id' => 18102346,
            'first_name' => 'marry',
            'last_name' => 'jane',
            'birthday' => '09/01/2000',
            'course' => 'BSIT'
        ]);

        DB::table('students')->insert([
            'id' => 18102347,
            'first_name' => 'juan',
            'last_name' => 'dela cruz',
            'birthday' => '05/15/1998',
            'course' => 'BSIS'
        ]);
    }
}