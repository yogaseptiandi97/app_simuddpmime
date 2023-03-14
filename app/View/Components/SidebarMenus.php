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
                    'url' => route('dashboard')
                ],
                'Donor Darah' => [
                    'icon' => 'fonticon-stats',
                    'url' => route('donor-darah')
                ],
            ],
            'BAGIAN AFTAP' => [
                'Pendonor' => [
                    'icon' => 'fonticon-stats',
                    'url' => '#'
                ],
                'Penyadapan' => [
                    'icon' => 'fonticon-stats',
                    'url' => '#'
                ],
                'Kantong Darah' => [
                    'icon' => 'fonticon-stats',
                    'url' => '#'
                ],
            ],
            'BAGIAN LABORATORIUM' => [
                'Uji Saring IMLTD' => [
                    'icon' => 'fonticon-stats',
                    'url' => '#'
                ],
                'Produksi Darah' => [
                    'icon' => 'fonticon-stats',
                    'url' => '#'
                ],
                'Pemusnahan Darah' => [
                    'icon' => 'fonticon-stats',
                    'url' => '#'
                ],
            ],
            'BAGIAN ADMINISTRASI' => [
                'Kepegawaian' => [
                    'icon' => 'fonticon-stats',
                    'url' => route('pegawai')
                ],
                'Surat Masuk & Surat Keluar' => [
                    'icon' => 'fonticon-stats',
                    'url' => '#'
                ],
            ],
            'BAGIAN ADMINISTRATOR' => [
                'Registrasi Akun' => [
                    'icon' => 'fonticon-stats',
                    'url' => route('registrasi-akun')
                ],
            ]
        ];

        return view('components.sidebar-menus', compact('sidebar_menus'));
    }
}
