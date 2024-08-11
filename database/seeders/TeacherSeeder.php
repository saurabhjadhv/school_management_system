<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create(['name' => 'Sashikant sir']);
        Teacher::create(['name' => 'Victoria mam']);
        Teacher::create(['name' => 'Nita mam']);
    }
}
