<?php

namespace App\View\Components\Organisms;

use Illuminate\View\Component;

class HorizontalArticle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $author, $avatar, $title, $paragraph, $category, $date, $time, $thumbnail, $href;
    public function __construct($author, $avatar, $title, $paragraph, $category, $date, $time, $thumbnail, $href)
    {
        $this->author = $author;
        $this->avatar = $avatar;
        $this->title = $title;
        $this->paragraph = $paragraph;
        $this->category = $category;
        $this->date = $date;
        $this->time = $time;
        $this->thumbnail = $thumbnail;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.organisms.horizontal-article');
    }
}
