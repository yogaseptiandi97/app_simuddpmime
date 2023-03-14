<?php

namespace App\Enums;

enum PositifNegatif: string
{
    case POSITIF = '0';
    case NEGATIF = '1';

    public function positif(): string
    {
        return $this == self::POSITIF;
    }
    public function negatif(): string
    {
        return $this == self::NEGATIF;
    }

    public function getText(): string
    {
        return match ($this)
        {
            self::POSITIF => '+',
            self::NEGATIF => '-',
        };
    }

    public function getHTML(): string
    {
        return sprintf('<div class="badge badge-light bg-white fw-bolder fs-2">%s</div>', $this->getText());
    }
}