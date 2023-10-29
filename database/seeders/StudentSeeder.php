<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = new Student();
        $student->name = 'Mauricio';
        $student->last_name = 'Almada';
        $student->control = '19150806';
        $student->email = 'ma.Al@gmail.com';
        $student->semester = '9';
        $student->program_id = '2';
        $student->save();

        $student2 = new Student();
        $student2->name = 'Carlos';
        $student2->last_name = 'Alberto';
        $student2->control = '20141819';
        $student2->email = 'ca.Al@gmail.com';
        $student2->semester = '8';
        $student2->program_id = '2';
        $student2->save();

        $student3 = new Student();
        $student3->name = 'Jose';
        $student3->last_name = 'Estrada';
        $student3->control = '20178795';
        $student3->email = 'Jo.es@gmail.com';
        $student3->semester = '2';
        $student3->program_id = '1';
        $student3->save();

        $student4 = new Student();
        $student4->name = 'Oscar';
        $student4->last_name = 'Padilla';
        $student4->control = '20151819';
        $student4->email = 'Os.pa@gmail.com';
        $student4->semester = '7';
        $student4->program_id = '1';
        $student4->save();


    }
}
