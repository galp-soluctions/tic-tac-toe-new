<?php

namespace App\Enums;

use App\Traits\OptionsEnum;

enum StatusJogo: string
{
    use OptionsEnum;

    case NaoComecou = 'nao comecou';
    case EmAndamento = 'em andamento';
    case Cancelado = 'cancelado';
}
