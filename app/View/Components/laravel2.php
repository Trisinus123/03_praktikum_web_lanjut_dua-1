<?php

namespace App\View\Components;

use Illuminate\View\Component;

class laravel2 extends Component {
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $dashboard;
    public $profile;
    public $hanif;
    public $trisinus;
    public $kuliah;

    public function __construct($dashboard, $profile, $hanif, $trisinus, $kuliah) {
        //
        $this->dashboard = $dashboard;
        $this->profile = $profile;
        $this->hanif = $hanif;
        $this->trisinus = $trisinus;
        $this->kuliah = $kuliah;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.laravel2');
    }
}
