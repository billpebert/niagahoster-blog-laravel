<?php

namespace App\View\Components\Molecules;

use Illuminate\View\Component;

class ArticleActionButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $like, $comment, $addOnClass;
    public function __construct($like, $comment, $addOnClass)
    {
        $this->like = $like;
        $this->comment = $comment;
        $this->addOnClass = $addOnClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.article-action-button');
    }
}
