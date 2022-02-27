<?php

namespace App\View\Components\Organisms;

use Illuminate\View\Component;

class VerticalArticle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $thumbnail, $author, $avatar, $title, $paragraph, $category, $date, $time;

    public function __construct($thumbnail, $author, $avatar, $title, $paragraph, $category, $date, $time)
    {
        $this->thumbnail = $thumbnail;
        $this->author = $author;
        $this->avatar = $avatar;
        $this->title = $title;
        $this->paragraph = $paragraph;
        $this->category = $category;
        $this->date = $date;
        $this->time = $time;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.organisms.vertical-article');
    }
}
