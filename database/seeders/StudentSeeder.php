<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        'user_id' => '1',
        'student_name' => 'Md.Makbul Hosen',
        'student_phone' => '01989139570',
        'student_email' => 'example1@gmail.com',
        ]);
    }
}
