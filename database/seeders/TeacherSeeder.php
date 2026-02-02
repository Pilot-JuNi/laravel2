<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            [
                'Name' => 'John Doe',
                'Kürzel' => 'JD',
                'Deputat' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name' => 'Jane Smith',
                'Kürzel' => 'JS',
                'Deputat' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name' => 'Alice Johnson',
                'Kürzel' => 'AJ',
                'Deputat' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
