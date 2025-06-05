<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'MUH. ZULHAJIR. AR',
                'student_id_number' => 'F55123052',
                'email' => 'muhzulhajirar@gmail.com',
                'phone_number' => '082292111232',
                'birth_date' => '2005-01-01',
                'gender' => 'Male',
                'status' => 'active',
                'major_id' => 1,
        
            ],
            [
                'name' => 'Bagus',
                'student_id_number' => 'F55123056',
                'email' => 'bagus@gmail.com',
                'phone_number' => '082290471649',
                'birth_date' => '2005-02-01',
                'gender' => 'Male',
                'status' => 'Inactive',
                'major_id' => 2,
            ],
        ]);
    }
}
