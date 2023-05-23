<?php

namespace App\Enums;

use App\Traits\OptionsEnum;

enum StatusJogador: string
{
    use OptionsEnum;

    case Ativo = 'ativo';
    case Inativo = 'inativo';
    case Banido = 'banido';
}
