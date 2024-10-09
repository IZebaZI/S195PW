<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    public $title;
    public $header;
    public $textbutton;

    public function __construct($title, $header, $textbutton)
    {
        $this->title = $title;
        $this->header = $header;
        $this->textbutton = $textbutton;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
