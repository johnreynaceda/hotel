<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Room;
use App\Models\Booked;
use Illuminate\Support\Carbon;

class Booking extends Component
{ public $roomid,$arrival,$departure,$ramdom,$ref,$adult,$child,$start,$end;

    public function mount()
    {
       
        $this->roomid = request('id');
        $numbers = '0123456789';
        $this->ramdom = str_shuffle(substr($numbers,0,8));
       
    }   

    public function render()
    {
        return view('livewire.customer.booking',[
            'rooms' => Room::where('id',$this->roomid)->get(),
            'random' => $this->ramdom,
           
        ]);
    }

    public function submit(){
        Booked::create([
            'room_id' => $this->roomid,
            'user_id' => auth()->user()->id,
            'reference' => $this->ramdom,
            'adults' => $this->adult,
            'childs' => $this->child,
            'arrival' => $this->arrival,
            'departure' => $this->departure,
        ]);
        $this->alert('success', 'Submit Successfully', [
            'position' =>  'center', 
            'timer' =>  3000,  
            'toast' =>  false, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
      ]);
      return route('customer-profile');

//     $start = Carbon::parse($this->arrival);
//     $end = Carbon::parse($this->departure);

//    $days = $start->diffInDays($end);
//     dd($days);
    
    }
}
