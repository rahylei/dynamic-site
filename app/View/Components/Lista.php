<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\SubModule;

class Lista extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $submodules;
    public function __construct(SubModule $submodules, $module)
    {
        $this->submodules = $submodules->where("module_id", $module)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.lista');
    }
}
