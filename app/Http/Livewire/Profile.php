<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Booked;
use Illuminate\Support\Carbon;

class Profile extends Component
{
    public $tab = 'all',$fname,$mname,$lname,$email,$contact;
    public function render()
    {
        $user = User::all()->where('id',auth()->user()->id)->first();
        $this->fname = $user->firstname;
        $this->mname = $user->middlename;
        $this->lname = $user->lastname;
        $this->email = $user->email;
        return view('livewire.customer.profile',[
            'booked' => Booked::all()->where('user_id',auth()->user()->id)->count(),
            'bookeds' => Booked::all()->where('user_id',auth()->user()->id),
            
        ]);
    }
}
