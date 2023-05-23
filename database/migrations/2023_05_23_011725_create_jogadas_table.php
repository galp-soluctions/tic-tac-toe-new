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
        Schema::create('jogadas', function (Blueprint $table) {
            $table->id();
            $table->string('posicao', 1);
            $table->foreignIdFor(Jogador::class, 'jogador_id');
            $table->foreignIdFor(Jogo::class, 'jogo_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogadas');
    }
};
