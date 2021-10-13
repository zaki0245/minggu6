<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'nim' => '2031710106',
            'name' => 'Muhammad Zaki',
            'class' => 'MI-2F',
            'department' => 'JTI',
            'phone_number' => '081384256211',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710076',
            'name' => 'Muslimatul rizky aulia',
            'class' => 'MI-2F',
            'department' => 'JTI',
            'phone_number' => '081384256211',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710060',
            'name' => 'Mustika Putri',
            'class' => 'MI-2F',
            'department' => 'JTI',
            'phone_number' => '081384256211',
        ]);
    }
}