<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Room;
use App\Models\CheckIn;
use App\Models\Booked as bookedModel;

class Booked extends Component
{
    public $approve=1,$booked_id;
    public function render()
    {
        return view('livewire.admin.booked.booked',[
            'bookeds' => bookedModel::all()->where('status', 0),
        ]);
    }

    public function approved($id){
       $data = bookedModel::find($id);
       $this->booked_id = $data->id;
       $data->update([
        'status' => $this->approve,
       ]);
        CheckIn::create([
            'booked_id' => $this->booked_id,
        ]);
    }
}
