<?php

namespace App\Models;

use App\Enums\ResultadoJogo;
use App\Enums\StatusJogo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Jogo extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status' => StatusJogo::class,
        'resultado' => ResultadoJogo::class,
    ];

    /**
     * Get the jogadas for the jogo.
     */
    public function jogadas(): HasMany
    {
        return $this->hasMany(Jogadas::class);
    }

    /**
     * Get the player1 associated with the jogo.
     */
    public function player1(): HasOne
    {
        return $this->hasOne(Jogador::class);
    }

    /**
     * Get the player2 associated with the jogo.
     */
    public function player2(): HasOne
    {
        return $this->hasOne(Jogador::class);
    }

    /**
     * Get the campoJogo associated with the jogo.
     */
    public function campoJogo(): HasOne
    {
        return $this->hasOne(CampoJogo::class);
    }
}
