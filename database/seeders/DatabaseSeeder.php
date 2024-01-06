<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        Student::create(['name' => 'John', 'grade' => '1']);
        Student::create(['name' => 'Jane', 'grade' => '1']);
        Student::create(['name' => 'Emily', 'grade' => '2']);
    }
}