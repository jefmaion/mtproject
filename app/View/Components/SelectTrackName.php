<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectTrackName extends Component
{

    public $tracks;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->tracks = [
            'Click', 'Guia', 'Bateria', 'Teclado', 'Baixo', 'Violão', 'Guitarra', 'Percussão', 'Orgão', 'FX', 'Loop'
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-track-name');
    }
}
