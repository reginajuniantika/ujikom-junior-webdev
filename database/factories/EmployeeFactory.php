<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     * @return array
     */
    public function definition()
    {
        return [
            'photo' => $this->faker->randomElement(['defauld1.png', 'defauld2.png', 'defauld3.png', 'defauld4.png']),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'domisili' => $this->faker->randomElement(['Jawa Timur', 'Jawa Tengah', 'Jawa Barat']),
        ];
    }
}
