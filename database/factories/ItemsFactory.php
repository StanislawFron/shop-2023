<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $kod = $this->faker->randomElement(['Laptopy', 'Komputery', 'Podzespoły komputerowe', 'Smartfony', 'Smartwatche', 'Telewizory', 'Głośniki', 'Aparaty', 'Kamery', 'Gaming', 'AGD', 'Dom i ogród', 'Biuro i firma', 'Sport i turystyka', 'Zabawki i dziecko', 'Uroda i zdrowie', 'Kultura i rozrywka', 'Supermarket']);
        return [
            'title' => Str::random(8),
            'price' => $this->faker->numberBetween(1, 1000),
            'amount' => $this->faker->numberBetween(1, 100),
            'category' => $kod,
            'group' => $kod,
            'description' => $this->faker->paragraph(2),
            'sale_percentage' => $this->faker->randomElement(['0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0','5', '15', '25', '40', '60']),
            'author' => $this->faker->sentence(),
        ];
    }
}
