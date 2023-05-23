<?php

namespace App\Enums;

use App\Traits\OptionsEnum;

enum ResultadoJogo: string
{
    use OptionsEnum;

    case Jogador1 = 'jogador1';
    case Jogador2 = 'jogador2';
    case Velha = 'velha';
}
