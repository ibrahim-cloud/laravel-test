<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeeFactory extends Factory
{
      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->lastname(),
            'prenom' => fake()->firstname(),
            'email' => fake()->email(),
            'phone' => fake()->phone()
        ];
    }
}
