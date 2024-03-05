<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'KSHT',
                'kategori_nama' => 'Kesehatan',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'PAKN',
                'kategori_nama' => 'Pakaian',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'MKMN',
                'kategori_nama' => 'Makanan & Minuman',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'PRKC',
                'kategori_nama' => 'Perawatan & Kecantikan',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'PRRM',
                'kategori_nama' => 'Perlengkapan Rumah',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
