<?php

namespace App\Enums;

enum Bagian: string
{
    case ADMINISTRASI = '0';
    case KEUANGAN = '1';
    case LOGISTIK = '2';
    case MEDIS = '3';
    case TEKNISI_MEDIS = '4';

    public function bagianAdministrasi(): string
    {
        return $this == self::ADMINISTRASI;
    }

    public function bagianKeuangan(): string
    {
        return $this == self::KEUANGAN;
    }

    public function bagianLogistik(): string
    {
        return $this == self::LOGISTIK;
    }

    public function bagianMedis(): string
    {
        return $this == self::MEDIS;
    }

    public function bagianTeknisiMedis(): string
    {
        return $this == self::TEKNISI_MEDIS;
    }

    public function getText(): string
    {
        return match ($this)
        {
            self::ADMINISTRASI => 'ADMINISTRASI',
            self::KEUANGAN => 'KEUANGAN',
            self::LOGISTIK => 'LOGISTIK',
            self::MEDIS => 'MEDIS',
            self::TEKNISI_MEDIS => 'TEKNISI MEDIS',
        };
    }
}