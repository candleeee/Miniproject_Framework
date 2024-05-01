<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'Kode_Barang'=> 'BJ01',
                'Nama_Barang'=> 'Knitted Wraps Shawl Craft',
                'Harga_Barang'=> '65000',
                'Deskripsi_Barang'=> 'Baju dengan blabla',
                'satuan_id'=> 1,
            ]
        ]);
    }
}
