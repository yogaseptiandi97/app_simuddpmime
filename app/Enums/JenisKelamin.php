<?php

namespace App\Enums;

enum JenisKelamin: string
{
    case PRIA = '0';
    case WANITA = '1';

    public function genderPria(): string
    {
        return $this == self::PRIA;
    }

    public function genderWanita(): string
    {
        return $this == self::WANITA;
    }

    public function getText(): string
    {
        return match ($this)
        {
            self::PRIA => 'PRIA',
            self::WANITA => 'WANITA'
        };
    }
}