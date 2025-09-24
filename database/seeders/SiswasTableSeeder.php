<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("siswas")->insert([
            [
                "nama_lengkap" => "Ahmad",
                "jenis_kelamin" => "Laki-laki",
                "tanggal_lahir" => "2008-05-15",
                "kelas" => "XI RPL 1",
            ],
            [
                "nama_lengkap" => "Siti",
                "jenis_kelamin" => "Perempuan",
                "tanggal_lahir" => "2006-08-22",
                "kelas" => "XI RPL 1",
            ],
            [
                "nama_lengkap" => "Budi",
                "jenis_kelamin" => "Laki-laki",
                "tanggal_lahir" => "2008-12-30",
                "kelas" => "XI RPL 1",
            ],
            [
                "nama_lengkap" => "Dewi",
                "jenis_kelamin" => "Perempuan",
                "tanggal_lahir" => "2006-03-10",
                "kelas" => "XI RPL 1",
            ],
            [
                "nama_lengkap" => "Rina",
                "jenis_kelamin" => "Perempuan",
                "tanggal_lahir" => "2008-11-05",
                "kelas" => "XI RPL 1",
            ],
        ]);
    }
}
