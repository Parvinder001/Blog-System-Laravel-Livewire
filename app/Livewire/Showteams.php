<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class Showteams extends Component
{
    public function render()
    {
        $member = Member::all();
        return view('livewire.showteams', ['members' => $member]);
    }
}
