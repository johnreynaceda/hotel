<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Room as roomModel;
use App\Models\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Room extends Component
{
    use WithFileUploads;
    public $addModal=false,$updateMode=false,$name,$price,$des,$photo,$lastphoto,$tname,$tprice;
    public function render()
    {
        return view('livewire.admin.room.room',[
            'rooms' => roomModel::all(),
        ]);
    }

    public function add(){
        $this->addModal=true;
    }
    public function save(){
        $filename = $this->photo->getClientOriginalName();
        // dd($filename);
        $this->photo->storeAs('rooms',$filename,'public');
       $data = roomModel::create([
        'name' => $this->name,
        'price' => $this->price,
        'description' => $this->des,
       ]);
       Image::create([
        'url' => $filename,
        'imageable_id' => $data->id,
        'imageable_type' =>  roomModel::class,
    ]);
       $this->addModal=false;
    }

    public function view($id){
        $data = roomModel::find($id);
        $this->tname = $data->name;
        $this->tprice = $data->price;
        $image = DB::table('images')->select('url')->where('imageable_id', $id)->get();
        foreach($image as $image_url){
            $this->lastphoto = $image_url->url; # Store editting image name
            // dd($this->lastphoto);
        }

    }


}
