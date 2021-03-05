<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Room;

class CustomerRoom extends Component
{
    public function render()
    {
        return view('livewire.customer.customer-room',[
            'rooms' => Room::all(),
            
        ]);
    }
}
