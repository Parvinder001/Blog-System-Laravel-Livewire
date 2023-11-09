<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowservicesPage extends Component
{
    public function render()
    {
        $services = Service::orderBy("created_at", "desc")->get();
        return view('livewire.showservices-page', compact('services'));
    }
}
