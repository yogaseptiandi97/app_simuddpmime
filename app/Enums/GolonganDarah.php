<?php

namespace App\Enums;

enum GolonganDarah: string
{
    case A = '0';
    case B = '1';
    case O = '2';
    case AB = '3';

    public function goldaA(): string
    {
        return $this == self::A;
    }
    public function goldaB(): string
    {
        return $this == self::B;
    }
    public function goldaO(): string
    {
        return $this == self::O;
    }
    public function goldaAB(): string
    {
        return $this == self::AB;
    }

    public function getText(): string
    {
        return match ($this)
        {
            self::A => 'A',
            self::B => 'B',
            self::O => 'O',
            self::AB => 'AB',
        };
    }

    public function getColor(): string
    {
        return match ($this)
        {
            self::A => 'light-primary',
            self::B => 'light-info',
            self::O => 'light-success',
            self::AB => 'light-danger',
        };
    }

    public function getHTML(): string
    {
        return sprintf('<div class="badge badge-%s fw-bolder fs-2">%s</div>', $this->getColor(), $this->getText());
    }
}