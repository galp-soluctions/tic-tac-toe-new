<?php

use App\Models\Jogador;
use App\Models\Jogo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campo_jogos', function (Blueprint $table) {
            $table->id();
            $table->json('posicoes');
            $table->foreignIdFor(Jogador::class, 'quem_comecou');
            $table->foreignIdFor(Jogador::class, 'quem_joga');
            $table->foreignIdFor(Jogo::class, 'jogo_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campo_jogos');
    }
};
