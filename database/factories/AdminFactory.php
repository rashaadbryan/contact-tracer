<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name'=> $this->faker->lastName,
            "email" => $this->faker->unique()->safeEmail,
            'password' => '$2y$12$JWeM0eFzN3P1vUEDFVuNNeNfjdyuC1N1vuuGjkPX/x6jsHEQIKzwK', // password is password (just for testing)
        ];
    }
}
