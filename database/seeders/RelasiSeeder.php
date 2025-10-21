<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Candra Herdiansyah',
            'nim' => '123456',
        ]);

        Wali::create([
            'nama' => 'Pak Herdi',
            'id_mahasiswa' => $mahasiswa->id
        ]);
    }
}
