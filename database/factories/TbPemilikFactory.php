<?php

namespace Database\Factories;

use App\Models\TbPemilik;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TbPemilik>
 */
class TbPemilikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nama_pemilik" => $this->faker->name(),
            "email" => $this->faker->email(),
            "alamat" => $this->faker->address(),
            "perusahaan" => $this->faker->company(),
            "no_hp" => $this->faker->phoneNumber(),
            "no_wa" => $this->faker->phoneNumber(),
            "foto" => $this->faker->imageUrl(),
        ];
    }
}
