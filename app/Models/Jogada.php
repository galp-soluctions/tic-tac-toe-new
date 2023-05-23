<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Jogada extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the jogo associated with the jogada.
     */
    public function jogo(): HasOne
    {
        return $this->hasOne(Jogo::class);
    }

    /**
     * Get the jogador associated with the jogada.
     */
    public function jogador(): HasOne
    {
        return $this->hasOne(Jogador::class);
    }
}
