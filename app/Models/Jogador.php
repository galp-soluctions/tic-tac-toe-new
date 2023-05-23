<?php

namespace App\Models;

use App\Enums\EstaOnline;
use App\Enums\StatusJogador;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jogador extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jogadores';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status' => StatusJogador::class,
        'online' => EstaOnline::class,
    ];

    /**
     * Get the jogos for the jogador.
     */
    public function jogos(): HasMany
    {
        return $this->hasMany(Jogo::class);
    }
}
