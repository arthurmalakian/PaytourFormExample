<?php

namespace Database\Seeders;

use App\Models\EducationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $educationLevel = [
            'Analfabeto',
            'Até 5º Ano Incompleto',
            '5º Ano Completo',
            '6º ao 9º Ano do Fundamental',
            'Fundamental Completo',
            'Médio Incompleto',
            'Médio Completo',
            'Superior Incompleto',
            'Superior Completo',
            'Mestrado',
            'Doutorado'
        ];
        foreach($educationLevel as $levelName){
            EducationLevel::create([
                'name' => $levelName
            ]);
        }
    }
}
