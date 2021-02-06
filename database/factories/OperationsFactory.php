<?php

namespace Database\Factories;

use App\Models\Operations;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperationsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Operations::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'operation' => $this->faker->randomNumber() . $this->faker->randomElement(['+', '-', '*', '/']) . $this->faker->randomNumber(),
            'result' => '8',
            'updated_date' => now(),
        ];
    }
}
