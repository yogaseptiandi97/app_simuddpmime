<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ToolbarMenus extends Component
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
        $toolbar_menus = [
            'donor-darah' => [
                'Database' => route('donor-darah'),
                'Tambah' => route('donor-darah.create'),
            ],
            'registrasi-akun' => [
                'Database' => route('registrasi-akun'),
                'Tambah' => route('registrasi-akun.create'),
            ],
            'pegawai' => [
                'Database' => route('pegawai'),
                'Tambah' => route('pegawai.create'),
            ],
        ];
        return view('components.toolbar-menus', compact('toolbar_menus'));
    }
}
