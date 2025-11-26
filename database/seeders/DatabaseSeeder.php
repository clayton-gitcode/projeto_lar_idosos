<?php

namespace Database\Seeders;

use App\Models\Paciente;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'projeto lar',
            'email' => 'projeto_lar@email.com',
            'password'=> '123456',
        ]);

        // Adiciona a chamada para o seu PacienteSeeder
        $this->call([
            PacienteSeeder::class,
        ]);
    }
}
