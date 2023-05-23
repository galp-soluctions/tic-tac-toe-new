<?php

use App\Enums\ResultadoJogo;
use App\Enums\StatusJogo;
use App\Models\CampoJogo;
use App\Models\Jogador;
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
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Jogador::class, 'jogador1_id');
            $table->foreignIdFor(Jogador::class, 'jogador2_id')->nullable();
            $table->foreignIdFor(CampoJogo::class);
            $table->enum('status', StatusJogo::options());
            $table->enum('resultado_jogo', ResultadoJogo::options())->nullable();
            $table->timestamp('comeco_jogo')->nullable();
            $table->timestamp('fim_jogo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogos');
    }
};
