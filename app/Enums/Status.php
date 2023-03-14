<?php

namespace App\Enums;

enum Status: string
{
    case AKTIF = '0';
    case NONAKTIF = '1';

    public function aktif(): string
    {
        return $this == self::AKTIF;
    }
    public function nonaktif(): string
    {
        return $this == self::NONAKTIF;
    }

    public function getText(): string
    {
        return match ($this)
        {
            self::AKTIF => 'AKTIF',
            self::NONAKTIF => 'SUSPENDED',
        };
    }

    public function getColor(): string
    {
        return match ($this)
        {
            self::AKTIF => 'light-success',
            self::NONAKTIF => 'light-danger',
        };
    }

    public function getHTML(): string
    {
        return sprintf('<div class="badge badge-%s fw-bolder">%s</div>', $this->getColor(), $this->getText());
    }
}