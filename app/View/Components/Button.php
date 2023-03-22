<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $link;
    public $text;
    /**
     * Create a new component instance.
     */
    public function __construct($link, $text)
    {
        $this->link = $link;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
