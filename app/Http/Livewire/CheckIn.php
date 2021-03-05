<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CheckIn as checkinModel;
use App\Models\CheckOut;

class CheckIn extends Component
{
    public $booked_id;
    public function render()
    {
        return view('livewire.admin.check-in',[
            'checkins' => checkinModel::all(),
        ]);
    }
    public function checkout($id){
        $data = checkinModel::find($id);
        $this->booked_id =  $data->booked->id;
        
        CheckOut::create([
            'booked_id' => $this->booked_id,
        ]);

        checkinModel::find($id)->delete();
    }
}
