<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('informasi_perusahaans')->insert([
            ['namaPerusahaan'=>'Clowtie', 
            'alamatPerusahaan'=>'Jl. Asia No. 23, Medan, Sumatera Utara']
        ]
        );
        \DB::table('informasi_pelanggans')->insert([
            ['namaPelanggan'=>'Hariadi Budi', 
            'alamatPelanggan'=>'Jl. Krakatau Ujung No. 35, Medan, Sumatera Utara']
        ]
        );
        \DB::table('produks')->insert([
            ['namaProduk'=>'Kaos lengan pendek warna putih', 
            'quantity'=>2,
            'unitPrice'=>80000,
            'taxes'=>"11%",
            'amount'=>160000],
            ['namaProduk'=>'Kaos lengan pendek warna hitam', 
            'quantity'=>3,
            'unitPrice'=>80000,
            'taxes'=>"11%",
            'amount'=>240000]
        ]
        );
    }
}
