<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'   => $this->faker->unique($reset = true)->numberBetween($min = 1, $max = 20),
            'profile'   => $this->faker->unique($reset = true)->jobTitle,

        ];
    }
}
