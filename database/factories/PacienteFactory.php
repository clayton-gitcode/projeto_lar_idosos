<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'birth_date' => fake()->date(),
            'age'=>fake()->numberBetween(18, 80),
            'sexo'=>fake()->randomElement(['M','F']),
            'rg' => fake()->word(),
            'cpf' => fake()->numberBetween(10000,99999),
            'sus' => fake()->numberBetween(100000000000000, 999999999999999),
            'responsavel' => fake()->name(),
            'doc_resp' => fake()->numberBetween(1000, 9999),
            'telefone_resp' => fake()->phoneNumber(false),
            'banco' => fake()->randomElement(['Itaú','Bradesco','Santander','caixa']),
            'tipo_beneficio' => fake()->randomElement(['Auxílio Moradia', 'Bolsa Família', 'Cesta Básica', 'Outros']),
            'valor_mensal' => fake()->randomFloat(2, 50, 2000),
            'data_recebimento' => fake()->date(),
            'obs' => fake()->sentence(),
        ];
    }
}
