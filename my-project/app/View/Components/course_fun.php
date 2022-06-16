<?php

namespace App\View\Components;

use Illuminate\View\Component;

class course_fun extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $herf;
    public $icon;
    public function __construct($title ,$herf ,$icon)
    {
        $this->title=$title;
        $this->herf=$herf;
        $this->icon=$icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.course_fun');
    }
}
