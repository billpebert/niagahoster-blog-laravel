<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class ArticleContent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title, $paragraph;
    public function __construct($title, $paragraph)
    {
        $this->title = $title;
        $this->paragraph = $paragraph;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.article-content');
    }
}
