<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'middlename' => $this->faker->optional()->firstName(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->optional()->phoneNumber(),
            'birthdate' => $this->faker->date(),
            'sex' => $this->faker->randomElement(['MALE', 'FEMALE']),
            'address' => $this->faker->address(),
            'year' => $this->faker->numberBetween(1, 6),
            'course' => $this->faker->randomElement(['Information Technology', 'Mechanical Engineering', 'Physics']),
            'section' => $this->faker->randomElement(['X', 'Y', 'Z']),
            'gpa' => $this->faker->optional()->randomFloat(2, 0, 4.0),
            'status' => $this->faker->randomElement(['ACTIVE', 'INACTIVE']),
        ];
    }
}
