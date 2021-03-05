<div class="bg-gray-800 h-100 ">
    <div class="carousel-cell shadow-md relative h-100  w-full ">
        {{-- <img src="{{ asset('images/carousel1.jpg') }}" class="absolute opacity-50" alt=""> --}}
       <div class="h-full absolute flex items-center justify-center">
           <img src="{{ asset('images/carousel2.jpg') }}" class="h-100 opacity-50 shadow-md" alt="">
       </div>
        <div class="absolute w-full text-white">
            <div class="h-100 w-full flex items-center justify-center">
              <div class="bg-gray-800 absolute opacity-75 px-20 py-20 flex  flex-col w-full">
                
              </div>
              <div class="relative">
                <h1 class="text-xl font-bold">CHECK AVAILABILITY</h1>
                <h1 class="text-md text-gray-400 font-semibold">The final price is calculated by giving 0% discount, adding 10% service charge and adding 13% VAT in the room's original price.</h1>
                <div class="flex mt-2 ">
                    <div class=" text-gray-800 flex space-x-3">
                        <h1 class="h-10 flex justify-center items-center w-40 bg-white">Ref.{{ $ramdom }}</h1>
                        {{-- <input type="text"  name="" value="" id="" disabled class="h-10 w-40  "> --}}
                        <select wire:model="adult" name="" id="" class="h-10 w-40 ">
                            <option value="">No. of Adults</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <select wire:model="child" name="" id="" class="h-10 w-40 ">
                            <option value="">No of Childs</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input type="date"   wire:model="arrival">
                        <input type="date"  wire:model="departure">
                        
                    <a href="" wire:click.prevent="submit" class="text-white h-10 bg-red-500 w-40 flex items-center justify-center border rounded-md">
                        <h1>SUBMIT</h1>
                    </a>
                </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<div class=" p-16">
<div class="flex w-full">
    <div class="w-8/12">
    @forelse ($rooms as $room)
    <div class="header py-2 border-b flex items-center space-x-2 border-gray-300">
        <h1 class="text-2xl font-bold text-gray-700">{{ $room->name }}</h1>
        <i class="material-icons text-yellow-300">star</i>
    </div>
    <div class="content mt-5 text-gray-400">
        <p>{{ $room->description }}</p>
    </div>
    @empty
        
    @endforelse
    <div class="header mt-10 py-2 border-b flex items-center space-x-2 border-gray-300">
        <h1 class="text-2xl font-bold text-gray-700">Facilities</h1>
        <i class="material-icons text-yellow-300">star</i>
        
    </div>
    <div class="content mt-5 text-gray-400">
        <div class="grid grid-cols-5 gap-3">
            <div class="h-24 w-32 border text-gray-700 hover:bg-gray-200 border-gray-400 flex flex-col">
                <div class=" h-24 flex justify-center items-center">
                    <i class="material-icons md-56 ">wifi</i>
                </div>
                <div class=" text-center">
                    <h1>WIFI</h1>
                </div>
            </div>
            <div class="h-24 w-32 border text-gray-700 hover:bg-gray-200 border-gray-400 flex flex-col">
                <div class=" h-24 flex justify-center items-center">
                    <i class="material-icons md-56 ">tv</i>
                </div>
                <div class=" text-center">
                    <h1>TV</h1>
                </div>
            </div>
            <div class="h-24 w-32 border text-gray-700 hover:bg-gray-200 border-gray-400 flex flex-col">
                <div class=" h-24 flex justify-center items-center">
                    <i class="material-icons md-56 ">free_breakfast</i>
                </div>
                <div class=" text-center">
                    <h1>BREAKFAST</h1>
                </div>
            </div>
            <div class="h-24 w-32 border text-gray-700 hover:bg-gray-200 border-gray-400 flex flex-col">
                <div class=" h-24 flex justify-center items-center">
                    <i class="material-icons md-56 ">bathtub</i>
                </div>
                <div class=" text-center">
                    <h1>BATHTUB</h1>
                </div>
            </div>
            <div class="h-24 w-32 border text-gray-700 hover:bg-gray-200 border-gray-400 flex flex-col">
                <div class=" h-24 flex justify-center items-center">
                    <i class="material-icons md-56 ">air</i>
                </div>
                <div class=" text-center">
                    <h1>AIR CONDITION</h1>
                </div>
            </div>
          </div>
    </div>
    </div>
    <div class=" w-4/12 px-2">
    <div class="border flex flex-col justify-center items-center border-gray-300 p-4">
        <div class="flex justify-center items-center h-20 w-20  rounded-full border">
            <img src="{{ asset('images/hicon.png') }}" class="h-12" alt="">
        </div>
        <div class="number text-center mt-3">
            <h1 class="font-bold text-yellow-900">CALL US!</h1>
            <h1 class="font-bold text-3xl text-gray-700">+63 9123456789</h1>
            <h1 class="font-semibold mt-2 text-md text-gray-700">We are available 24/7 Monday to Sunday</h1>
        </div>
        <a href="" class="bg-red-500 p-3 px-20 mt-2 text-white">
            <h1>CALL NOW</h1>
        </a>
    </div>
    </div>
</div>
</div>