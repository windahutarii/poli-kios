<?php

namespace Database\Factories;

use App\Models\TbKios;
use App\Models\TbPemilik;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TbKios>
 */
class TbKiosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $table->id("id_kios");
        // $table->unsignedBigInteger("id_pemilik");
        // $table->foreign("id_pemilik")->references("id_pemilik")->on("tb_pemiliks")->onDelete("cascade");
        // $table->string("nama_kios");
        // $table->string("alamat");
        // $table->text("deskripsi")->nullable();
        // $table->string("sertifikat");
        // $table->float("luas_tanah");
        // $table->float("luas_bangunan");
        // $table->decimal("lantai");
        // $table->decimal("wastafel")->nullable();
        // $table->decimal("parkir")->nullable();
        // $table->decimal("kamar_mandi")->nullable();
        // $table->boolean("wifi")->default(0);
        // $table->string("foto_kios")->nullable();
        // $table->boolean("status_terjual")->default(0);
        // $table->integer("harga_jual");
        return [
            "id_pemilik" => TbPemilik::factory(),
            "nama_kios" => $this->faker->name(),
            "alamat" => $this->faker->address(),
            "deskripsi" => $this->faker->text(),
            "sertifikat" => $this->faker->imageUrl(),
            "luas_tanah" => $this->faker->randomFloat('2', '0', '100'), // '2' is the number of decimal places, '0' is the minimum value, '100' is the maximum value
            "luas_bangunan" => $this->faker->randomFloat('2', '0', '100'),
            "lantai" => $this->faker->numberBetween(1, 3),
            "wastafel" => $this->faker->numberBetween(1, 3),
            "parkir" => $this->faker->numberBetween(1, 2),
            "kamar_mandi" => $this->faker->numberBetween(1, 2), // '0' is the minimum value, '2' is the maximum value
            "wifi" => $this->faker->boolean(),
            "foto_kios" => $this->faker->imageUrl(),
            "status_terjual" => $this->faker->boolean(),
            "harga_jual" => $this->faker->randomNumber(),
        ];
    }
}
