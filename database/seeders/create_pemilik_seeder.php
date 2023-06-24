<?php

namespace Database\Seeders;

use App\Models\TbPemilik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class create_pemilik_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pemilik = [
            [
                "nama_pemilik" => "Agus",
                "email" => "agus@gmail.com",
                "alamat" => "Jl. Raya Kedung Halang",
                "perusahaan" => "PT. Agus",
                "no_hp" => "081234567890",
                "no_wa" => "081234567890",
                "foto" => "https://i.ibb.co/0j3QY0L/agus.jpg",
            ],
            [
                "nama_pemilik" => "Budi",
                "email" => "budi@gmail.com",
                "alamat" => "Jl. Raya Kedung Halang",
                "perusahaan" => "PT. Budi",
                "no_hp" => "081234567890",
                "no_wa" => "081234567890",
                "foto" => "https://i.ibb.co/0j3QY0L/agus.jpg",
            ],
        ];
        foreach ($pemilik as $p) {
            TbPemilik::create($p);
        }
    }
}
