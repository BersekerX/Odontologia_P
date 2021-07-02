<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->firstName(),
            'apellidos'=> $this->faker->lastName(),
            'fechaNacimiento'=> $this->faker->date(),
            'genero'=> $this->faker->randomElement(['M', 'F', 'O']),
            'telefono'=> $this->faker->phoneNumber(),
            'email'=> $this->faker->email(),
        ];
    }
}
