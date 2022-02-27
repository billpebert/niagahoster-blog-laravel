<?php

namespace App\View\Components\Molecules;

use Illuminate\View\Component;

class ArticleDetails extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $date, $category, $time;
    public function __construct($date, $category, $time)
    {
        $this->date = $date;
        $this->category = $category;
        $this->time = $time;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.article-details');
    }
}
