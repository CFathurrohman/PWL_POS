<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Andi Alpukat',
                'penjualan_kode' => 1,
                'penjualan_time' => '2024-03-04 07:00:00',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Bagus Brownies',
                'penjualan_kode' => 2,
                'penjualan_time' => '2024-03-04 07:00:00',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Cahyo Cilok',
                'penjualan_kode' => 3,
                'penjualan_time' => '2024-03-04 07:00:00',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Dani Degan',
                'penjualan_kode' => 4,
                'penjualan_time' => '2024-03-04 07:00:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Endra Eclair',
                'penjualan_kode' => 5,
                'penjualan_time' => '2024-03-04 07:00:00',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Farkhan Frenchfries',
                'penjualan_kode' => 6,
                'penjualan_time' => '2024-03-04 07:00:00',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Galang Gadogado',
                'penjualan_kode' => 7,
                'penjualan_time' => '2024-03-04 07:00:00',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Heru Hamburger',
                'penjualan_kode' => 8,
                'penjualan_time' => '2024-03-04 07:00:00',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Intan Icecream',
                'penjualan_kode' => 9,
                'penjualan_time' => '2024-03-04 07:00:00',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Jana Jagung',
                'penjualan_kode' => 10,
                'penjualan_time' => '2024-03-04 07:00:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
