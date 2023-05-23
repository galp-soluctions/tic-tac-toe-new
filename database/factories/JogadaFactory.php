<?php

namespace Database\Factories;

use App\Models\Jogador;
use App\Models\Jogo;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jogada>
 */
class JogadaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'posicao' => Str::random(1),
            'jogador_id' => Jogador::factory()->create(),
            'jogo_id' => Jogo::factory()->create(),
        ];
    }
}
