<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
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
    public bool $isOpen = false;


    public function render(): View|Closure|string
    {
        return view('layouts.admin');
    }

    public function toggleSidebar()
    {
        $this->isOpen = !$this->isOpen;
    }
}
