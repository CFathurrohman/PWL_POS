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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'KSHT1',
                'barang_nama' => 'Mixagrip',
                'harga_beli' => 1250,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'KSHT2',
                'barang_nama' => 'UltraFlu',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'PAKN1',
                'barang_nama' => 'Kaos Polos Hitam Uniqlo',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'PAKN2',
                'barang_nama' => 'Celana Chinos Hitam Erigo',
                'harga_beli' => 120000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'MKMN1',
                'barang_nama' => 'Pilus Garuda',
                'harga_beli' => 5000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'MKMN2',
                'barang_nama' => 'Teh Pucuk Harum 300Ml',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'PRKC1',
                'barang_nama' => 'COOSRX Mousturizing Lotion 100Ml',
                'harga_beli' => 190000,
                'harga_jual' => 210000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'PRKC2',
                'barang_nama' => 'Skintific Acne Serum',
                'harga_beli' => 100000,
                'harga_jual' => 119000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'PRRM1',
                'barang_nama' => 'Sponge Cuci Piring',
                'harga_beli' => 4000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'PRRM2',
                'barang_nama' => 'Sapu',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
