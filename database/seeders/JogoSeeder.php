<?php

namespace Database\Seeders;

use App\Models\CampoJogo;
use App\Models\Jogador;
use App\Models\Jogo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jogo::factory()->create([
            'jogador1_id' => Jogador::factory()->create(),
            'jogador2_id' => Jogador::factory()->create(),
            'campo_jogo_id' => CampoJogo::factory()->create(),
        ]);
    }
}
