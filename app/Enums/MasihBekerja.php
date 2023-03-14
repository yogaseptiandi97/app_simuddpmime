<?php

namespace App\Enums;

enum MasihBekerja: string
{
    case AKTIF = '0';
    case RESIGN = '1';

    public function masihAktif(): string
    {
        return $this == self::AKTIF;
    }

    public function sudahResign(): string
    {
        return $this == self::RESIGN;
    }

    public function getText(): string
    {
        return match ($this)
        {
            self::AKTIF => 'AKTIF',
            self::RESIGN => 'RESIGN'

        };
    }

    public function getColor(): string
    {
        return match ($this)
        {
            self::AKTIF => 'light-success',
            self::RESIGN => 'light-danger'

        };
    }

    public function getHTML(): string
    {
        return sprintf('<div class="badge badge-%s fw-bolder">%s</div>', $this->getColor(), $this->getText());
    }
}