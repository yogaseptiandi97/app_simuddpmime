<?php

namespace App\Enums;

enum TipeDonor: string
{
    case SUKARELA = '0';
    case PENGGANTI = '1';

    public function sukarela(): string
    {
        return $this == self::SUKARELA;
    }
    public function pengganti(): string
    {
        return $this == self::PENGGANTI;
    }

    public function getText(): string
    {
        return match ($this)
        {
            self::SUKARELA => 'SUKARELA',
            self::PENGGANTI => 'PENGGANTI',
        };
    }

    public function getColor(): string
    {
        return match ($this)
        {
            self::SUKARELA => 'light-success',
            self::PENGGANTI => 'light-danger',
        };
    }

    public function getHTML(): string
    {
        return sprintf('<div class="badge badge-%s fw-bolder">%s</div>',$this->getColor(), $this->getText());
    }
}