<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'Kode_Satuan'=> 'PCS',
                'Nama_Satuan'=> 'Pieces',
            ],
            [
                'Kode_Satuan'=> 'LSN',
                'Nama_Satuan'=> 'Lusin',
            ],
            [
                'Kode_Satuan'=> 'KD',
                'Nama_Satuan'=> 'Kodi',
            ]
        ]);

    }
}
