<?php

namespace App\Enums;

enum StatusKepegawaian: string
{
    case MAGANG = '0';
    case KONTRAK = '1';
    case TETAP = '2';

    public function statusMagang(): string
    {
        return $this == self::MAGANG;
    }

    public function statusKontrak(): string
    {
        return $this == self::KONTRAK;
    }

    public function statusTetap(): string
    {
        return $this == self::TETAP;
    }

    public function getText(): string
    {
        return match ($this)
        {
            self::MAGANG => 'MAGANG',
            self::KONTRAK => 'KONTRAK',
            self::TETAP => 'TETAP',

        };
    }

    public function getColor(): string
    {
        return match ($this)
        {
            self::MAGANG => 'light-dark',
            self::KONTRAK => 'light-success',
            self::TETAP => 'light-primary',

        };
    }

    public function getHTML(): string
    {
        return sprintf('<div class="badge badge-%s fw-bolder">%s</div>', $this->getColor(), $this->getText());
    }
}