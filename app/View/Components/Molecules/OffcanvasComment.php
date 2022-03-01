<?php

namespace App\View\Components\Molecules;

use Illuminate\View\Component;

class OffcanvasComment extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $target, $comment, $totalComment;
    public function __construct($target, $comment, $totalComment)
    {
        $this->target = $target;
        $this->comment = $comment;
        $this->totalComment = $totalComment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.offcanvas-comment');
    }
}
