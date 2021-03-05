<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CheckOut as checkoutModel;

class CheckOut extends Component
{
    public function render()
    {
        return view('livewire.admin.check-out',[
            'checkouts' => checkoutModel::all(),
        ]);
    }
}
