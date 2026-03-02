<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
 
class KurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kurse')->insert([
        [   'kursname' => 'MATHE',
            'beschreibung' => 'lustig und toll. hier rechnen wir!',
            'anzahl_studenten' => 400,
            'teacher_id' => 2,
            'created_at' =>now(),
            'updated_at' =>now(),
            ],
            [   'kursname' => 'Datenbanken',
            'beschreibung' => 'Wer sonst soll die Daten banken, wenn nicht wir...',
            'anzahl_studenten' => 3,
            'teacher_id' => 1,
            'created_at' =>now(),
            'updated_at' =>now(),
            ],
 
        ]);
    }
}