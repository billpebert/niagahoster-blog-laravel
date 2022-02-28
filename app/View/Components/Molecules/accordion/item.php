<?php

namespace App\View\Components\Molecules\accordion;

use Illuminate\View\Component;

class item extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $target, $title, $body;

    public function __construct($target, $title, $body)
    {
        $this->target = $target;
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.accordion.item');
    }
}
