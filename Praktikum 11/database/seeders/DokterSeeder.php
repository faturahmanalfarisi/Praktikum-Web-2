<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Ari',
                'gender' => 'male',
                'tmp_lahir' => 'Jasinga',
                'tgl_lahir' => '2005-02-20',
                'kategori' => 'Umum',
                'telepon' => '0895375742208',
                'alamat' => 'Andara'
            ],
        ]);
    }
}
