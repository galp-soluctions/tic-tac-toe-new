<?php

namespace Database\Seeders;

use App\Models\CampoJogo;
use Illuminate\Database\Seeder;

class CampoJogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // faltou concluir factory
        CampoJogo::factory()->create();
    }
}
