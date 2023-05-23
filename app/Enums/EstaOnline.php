<?php

namespace App\Enums;

use App\Traits\OptionsEnum;

enum EstaOnline: string
{
    use OptionsEnum;

    case Sim = 'sim';
    case Nao = 'nao';
}
