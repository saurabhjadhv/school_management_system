<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'student_name' => 'Student A',
            'class_teacher_id' => 1,
            'class' => '10th Grade',
            'admission_date' => now(),
            'yearly_fees' => 20000.00
        ]);
    }
}
