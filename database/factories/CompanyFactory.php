<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
            // $values = 0;
            // for ($i = 0; $i <= 20 ; $i++) {
            // get a random digit, but always a new one, to avoid duplicates
            // return $this->faker->unique()->randomDigit;
            // }

        return [
            'user_id' => $this->faker->unique($reset = true)->numberBetween($min = 1, $max = 20) ,
            'company'   => $this->faker->company,


        ];
    }
}
