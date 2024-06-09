<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('periksas')->insert([
            [
                'tanggal' => '2004-05-25',
                'berat' => 50,
                'tinggi' => 175,
                'tensi' => '60/60',
                'keterangan' => 'sehat'
            ],
            [
                'tanggal' => '2024-03-13',
                'berat' => 55,
                'tinggi' => 175,
                'tensi' => '60/80',
                'keterangan' => 'kurang sehat'
            ],
        ]);
    }
}
