<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
<<<<<<< HEAD
=======
    public function __construct(
        public string $metaTitle = 'Default title',
        public string $metaDescription = 'Default description',
    )
    {}

>>>>>>> upstream/master
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
