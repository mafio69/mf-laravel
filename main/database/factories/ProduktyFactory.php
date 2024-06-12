<?php

namespace Database\Factories;

use App\Models\Produkty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produkty>
 */
class ProduktyFactory extends Factory
{
    /**
     * Define the model's default state.p
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nazwa_produktu' => $this->faker->word,
            'producent' => $this->faker->company,
            'actual' =>$this->faker->randomNumber(),
            'jednostka_ceny' => $this->faker->word,
            'waga' => $this->faker->randomFloat(2, 0, 100),
            'srednica' => $this->faker->randomFloat(2, 0, 100),
            'dlugosc' => $this->faker->randomNumber(6),
            'szerokosc' => $this->faker->randomNumber(6),
            'wysokosc' => $this->faker->randomNumber(6),
            'grubosc' => $this->faker->randomFloat(2, 0, 100),
            'typ_pakowania' => $this->faker->randomElement(
                ['paleta', 'rolka', 'karton', 'paczka', '']
            ),
            'jednostki_zakupu' => $this->faker->randomNumber(6),
            'jednostki_magazynowe' => $this->faker->randomElement(
                ['pełna paleta', 'szt', 'paczka', '']
            ),
        ];
    }
}
