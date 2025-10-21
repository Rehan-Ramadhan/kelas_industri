<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->delete();
        Product::insert([
            [
                'name' => "Topi Trucker Hitam",
                'description' => "Topi model trucker warna hitam, cocok untuk gaya santai.",
                'price' => 45000,
                'stock' => 150,
            ],
            [
                'name' => "Kacamata Hitam Classic",
                'description' => "Kacamata hitam dengan bingkai classic, melindungi dari sinar UV.",
                'price' => 75000,
                'stock' => 120,
            ],
            [
                'name' => "Kaos Oversize Putih",
                'description' => "Kaos oversized warna putih, bahan cotton combed 30s.",
                'price' => 99000,
                'stock' => 200,
            ],
            [
                'name' => "Kemeja Flanel Coklat",
                'description' => "Kemeja flanel motif kotak-kotak warna coklat, cocok untuk gaya kasual.",
                'price' => 125000,
                'stock' => 85,
            ],
            [
                'name' => "Hoodie Zipper Hitam",
                'description' => "Hoodie dengan zipper depan, bahan fleece yang hangat.",
                'price' => 155000,
                'stock' => 70,
            ],
            [
                'name' => "Celana Jeans Slim Fit",
                'description' => "Celana jeans warna biru gelap model slim fit.",
                'price' => 175000,
                'stock' => 95,
            ],
            [
                'name' => "Celana Chino Cream",
                'description' => "Celana chino warna cream, bahan stretch nyaman dipakai.",
                'price' => 140000,
                'stock' => 110,
            ],
            [
                'name' => "Sepatu Sneakers Putih",
                'description' => "Sneakers warna putih model low-cut, cocok untuk gaya kasual hingga semi-formal.",
                'price' => 225000,
                'stock' => 60,
            ],
            [
                'name' => "Sandal Slide Pria",
                'description' => "Sandal model slide, cocok untuk penggunaan harian atau santai.",
                'price' => 65000,
                'stock' => 140,
            ],
            [
                'name' => "Kaos Kaki Polos Hitam",
                'description' => "Kaos kaki polos warna hitam, bahan halus dan nyaman.",
                'price' => 15000,
                'stock' => 300,
            ]
        ]);
    }
}
