<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $program = new Program();
        $program->name = 'ITIC';
        $program->description = 'Ingenieria en Tecnologias de la informaciones y comunicaciones';
        $program->save();

        $program2 = new Program();
        $program2->name = 'IGE';
        $program2->description = 'Ingenieria en gestion empresarial';
        $program2->save();

        $program3 = new Program();
        $program3->name = 'IE';
        $program3->description = 'Ingenieria en electrica';
        $program3->save();

    }
}
