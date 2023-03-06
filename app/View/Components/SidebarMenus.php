<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarMenus extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $sidebar_menus = [
            'MENU UTAMA' => [
                'Dashboard' => [
                    'icon' => 'fonticon-stats',
                    'url' => 'dashboard'
                ],
            ],
            'BAGIAN AFTAP' => [
                'Pendonor' => [
                    'icon' => 'fonticon-stats',
                    'url' => 'pendonor'
                ],
                'Penyadapan' => [
                    'icon' => 'fonticon-stats',
                    'url' => 'penyadapan'
                ],
            ],
            'BAGIAN LABORATORIUM' => [
                'Uji Saring IMLTD' => [
                    'icon' => 'fonticon-stats',
                    'url' => 'uji-saring-imltd'
                ],
                'Kantong Darah' => [
                    'icon' => 'fonticon-stats',
                    'url' => 'kantong-darah'
                ],
                'Produksi Darah' => [
                    'icon' => 'fonticon-stats',
                    'url' => 'produksi-darah'
                ],
                'Pemusnahan Darah' => [
                    'icon' => 'fonticon-stats',
                    'url' => 'pemusnahan-darah'
                ],
            ],
            'BAGIAN ADMINISTRASI' => [
                'Kepegawaian' => [
                    'icon' => 'fonticon-stats',
                    'url' => 'kepegawaian'
                ],
                'Surat Masuk & Surat Keluar' => [
                    'icon' => 'fonticon-stats',
                    'url' => 'surat-masuk-keluar'
                ],
            ],
            'BAGIAN ADMINISTRATOR' => [
                'Registrasi Akun' => [
                    'icon' => 'fonticon-stats',
                    'url' => 'registrasi-akun'
                ],
            ]
        ];

        return view('components.sidebar-menus', compact('sidebar_menus'));
    }
}
