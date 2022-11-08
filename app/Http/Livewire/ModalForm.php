<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
/*use App\Models\SubModule;*/

class ModalForm extends ModalComponent
{
    public $type;
    public $seccion;
    public $submdule;

    public function mount($seccion,$type, $submodule = null){
        $this->seccion = $seccion;
        $this->type = $type;
        $this->submodule = $submodule;
    }

    public function render()
    {
        return view('livewire.modal-form');
    }
}
