<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayoutSingle extends Component
{
    public string $title;
    public ?string $subtitle;
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
        return view('layouts.single-page.app');
    }
}
