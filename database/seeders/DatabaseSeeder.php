<?php

namespace Database\Seeders;

use App\Models\TbKios;
use App\Models\TbPemilik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory TbKios
        TbPemilik::factory()->count(10)->create();
        TbKios::factory()->count(10)->create();
        $this->call([
            create_user_seeder::class,
            create_pemilik_seeder::class,
        ]);
    }
}
