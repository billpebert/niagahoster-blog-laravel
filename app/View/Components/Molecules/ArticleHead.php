<?php

namespace App\View\Components\Molecules;

use Illuminate\View\Component;

class ArticleHead extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title, $src;
    public function __construct($title, $src)
    {
        $this->src = $src;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.article--head');
    }
}
