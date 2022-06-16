<?php

namespace App\View\Components;

use Illuminate\View\Component;

class course extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$course_list)
    {
        $this->title=$title;
        $this->course_list=$course_list;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.course')->name('components.course');
    }
}
