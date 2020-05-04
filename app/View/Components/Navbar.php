<?php

namespace App\View\Components;

use App\Cat;
use Illuminate\View\Component;

class Navbar extends Component
{
    public  $logo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($logo)
    {
        //
        $this->logo=$logo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.navbar');
    }

    public function cats(){
        return Cat::all();
    }
}
