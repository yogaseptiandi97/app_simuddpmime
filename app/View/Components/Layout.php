<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public string $title;
    public ?string $subtitle;
    public ?string $vendorCSS = null;
    public ?string $vendorJS = null;
    public ?string $customCSS = null;
    public ?string $customJS = null;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $subtitle = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.sidebar-page.app');
    }
}
