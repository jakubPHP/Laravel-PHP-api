<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\People::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'imie' => $this->faker->firstName(),
            'nazwisko' => $this->faker->lastName,
            'nr_telefonu' => $this->faker->phoneNumber,
            'ulice' => $this->faker->streetName,
            'miasto' => $this->faker->city,
            'kraj' => $this->faker->country,
        ];
    }
}