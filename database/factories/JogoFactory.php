<?php

namespace Database\Factories;

use App\Models\CampoJogo;
use App\Models\Jogador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jogo>
 */
class JogoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => 'em andamento',
            'jogador1_id' => Jogador::factory()->create(),
            'jogador2_id' => Jogador::factory()->create(),
            'campo_jogo_id' => CampoJogo::factory()->create(),
            'comeco_jogo' => now(),
        ];
    }
}
