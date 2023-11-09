<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Servicedetailpage extends Component
{
    public $service;

    function mount($id)
    {
        $this->service = Service::findOrFail($id);

    }
    public function render()
    {
        return view('livewire.servicedetailpage', ["service" => $this->service]);
    }
}
