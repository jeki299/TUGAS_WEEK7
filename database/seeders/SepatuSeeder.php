<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sepatu;

class SepatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sepatu::create([
            'nama_sepatu' => 'Vans Old Skool',
            'merk' => 'Vans',
            'ukuran' => 41,
            'harga' => 650000,
        ]);

        Sepatu::create([
            'nama_sepatu' => 'Converse Chuck Taylor',
            'merk' => 'Converse',
            'ukuran' => 42,
            'harga' => 700000,
        ]);

        Sepatu::create([
            'nama_sepatu' => 'Adidas Campus 00s',
            'merk' => 'Adidas',
            'ukuran' => 45,
            'harga' => 1700000,
        ]);

        Sepatu::create([
            'nama_sepatu' => 'Air Force 1',
            'merk' => 'Nike',
            'ukuran' => 42,
            'harga' => 1500000,
        ]);

        Sepatu::create([
            'nama_sepatu' => 'Air Jordan 1 low',
            'merk' => 'Nike',
            'ukuran' => 44,
            'harga' => 1800000,
        ]);
    }
}
