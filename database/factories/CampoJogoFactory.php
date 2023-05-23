<?php

namespace Database\Factories;

use App\Models\Jogador;
use App\Models\Jogo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CampoJogo>
 */
class CampoJogoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'posicoes' => "{teste: 'teste'}",
            'quem_comecou' => Jogador::factory()->create(),
            'quem_joga' => Jogador::factory()->create(),
            'jogo_id' => Jogo::factory()->create(),
        ];
    }
}
