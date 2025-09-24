<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("transaksis")->insert([
            [
                "nama_barang" => "Laptop",
                "harga_barang" => 10000000,
                "jumlah" => 1,
                "total_harga" => 10000000,
                "tanggal_beli" => "2023-01-15",
            ],
            [
                "nama_barang" => "Smartphone",
                "harga_barang" => 5000000,
                "jumlah" => 2,
                "total_harga" => 10000000,
                "tanggal_beli" => "2023-02-20",
            ],
            [
                "nama_barang" => "Headphones",
                "harga_barang" => 1500000,
                "jumlah" => 3,
                "total_harga" => 4500000,
                "tanggal_beli" => "2023-03-10",
            ],
            [
                "nama_barang" => "Monitor",
                "harga_barang" => 3000000,
                "jumlah" => 1,
                "total_harga" => 3000000,
                "tanggal_beli" => "2023-04-05",
            ],
            [
                "nama_barang" => "Keyboard",
                "harga_barang" => 800000,
                "jumlah" => 2,
                "total_harga" => 1600000,
                "tanggal_beli" => "2023-05-12",
            ],
        ]);
    }
}
