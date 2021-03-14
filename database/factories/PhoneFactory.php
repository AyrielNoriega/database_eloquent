<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         return [
            //$this->faker->name,
            // 'user_id' => rand(1,30),
            'user_id' => $this->faker->unique()->numberBetween($min = 1, $max = 30) ,
            'phone'   => $this->faker->e164PhoneNumber,
        ];
    }
}
