<?php

namespace App\Enums;

enum RoleAkun: string
{
    case ADMIN = '0';
    case AFTAP = '1';
    case KEUANGAN = '2';
    case LABOR = '3';
    case LOGISTIK = '4';
    case PMI = '5';

    public function admin(): string
    {
        return $this == self::ADMIN;
    }
    public function aftap(): string
    {
        return $this == self::AFTAP;
    }
    public function keuangan(): string
    {
        return $this == self::KEUANGAN;
    }
    public function labor(): string
    {
        return $this == self::LABOR;
    }
    public function logistik(): string
    {
        return $this == self::LOGISTIK;
    }
    public function pmi(): string
    {
        return $this == self::PMI;
    }

    public function getText(): string
    {
        return match ($this)
        {
            self::ADMIN => 'ADMIN',
            self::AFTAP => 'AFTAP',
            self::KEUANGAN => 'KEUANGAN',
            self::LABOR => 'LABOR',
            self::LOGISTIK => 'LOGISTIK',
            self::PMI => 'PMI',
        };
    }

    public function getColor(): string
    {
        return match ($this)
        {
            self::ADMIN => 'light-primary',
            self::AFTAP => 'light-info',
            self::KEUANGAN => 'light-dark',
            self::LABOR => 'light-warning',
            self::LOGISTIK => 'light-success',
            self::PMI => 'light-danger',
        };
    }

    public function getHTML(): string
    {
        return sprintf('<div class="badge badge-%s fw-bolder">%s</div>', $this->getColor(),$this->getText());
    }
}