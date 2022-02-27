<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class AuthorProfile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name, $avatar;
    public function __construct($name, $avatar)
    {
        $this->name = $name;
        $this->avatar = $avatar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.author-profile');
    }
}
