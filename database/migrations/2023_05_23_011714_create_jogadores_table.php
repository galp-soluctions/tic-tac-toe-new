<?php

use App\Enums\EstaOnline;
use App\Enums\StatusJogador;
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
        Schema::create('jogadores', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique();
            $table->string('senha');
            $table->string('email')->unique();
            $table->enum('status', StatusJogador::options());
            $table->enum('online', EstaOnline::options());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogadores');
    }
};
