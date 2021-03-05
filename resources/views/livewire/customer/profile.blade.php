<div>
    <div class="flex w-full h-72">
        <div class="bg-gradient-to-b from-blue-400 to-gray-700 w-3/12 flex items-center justify-center">
        <img src="{{ asset('images/user.png') }}" class="h-72 opacity-75 absolute" alt="">
        <div class="relative text-white font-bold mt-40 mr-40">
            <h1 class="text-xl underline uppercase">{{ auth()->user()->firstname }} </h1>
            <h1 class="text-md text-gray-400">ISULAN S.K </h1>
        </div>
        </div>
        <div class="bg-gray-900 w-9/12">
            <img src="{{ asset('images/carousel2.jpg') }}" class="h-72 w-full opacity-60 absolute" alt="">
            <div class="relative flex flex-col justify-end h-full p-12">
                <div class=" text-xl text-gray-300 font-bold">Hi {{ auth()->user()->firstname }}!</div>
                <div class="text-white text-2xl font-bold">Welcome to your dashboard</div>
            </div>
        </div>
    </div>
    <div class="flex w-full ">
        <div class="bg-gradient-to-b from-blue-400 to-gray-600 w-3/12 flex flex-col">

            <div class="flex justify-center items-center mt-5">
                <div class="border-r border-b flex flex-col justify-center items-center h-28 w-28">
                    <a href="" class="flex flex-col justify-center items-center" wire:click.prevent="$set('tab', 'all')">
                        <div class="text-white">
                            <i class="material-icons md-36">dashboard</i>
                        </div>
                        <div class="text-white">All</div>
                    </a>
                </div>
                <div class="border-b flex justify-center flex-col items-center h-28 w-28">
                   <a href="" class="flex flex-col justify-center items-center" wire:click.prevent="$set('tab', 'room')">
                    <div class="text-white">
                        <i class="material-icons md-36">meeting_room</i>
                    </div>
                    <div class="text-white">Room</div>
                   </a>
                </div>
            </div>
            <div class="flex justify-center items-center s">
                <div class="border-r border-b flex flex-col justify-center items-center h-28 w-28">
                    <a href="" class="flex flex-col justify-center items-center" wire:click.prevent="$set('tab', 'profile')">
                        <div class="text-white">
                            <i class="material-icons md-36">person</i>
                        </div>
                        <div class="text-white">Profile</div>
                    </a>
                </div>
                <div class="border-b flex justify-center flex-col items-center h-28 w-28">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <a href="{{ route('logout') }}" class="flex flex-col justify-center items-center" onclick="event.preventDefault();
                    this.closest('form').submit();">
                        <div class="text-white">
                            <i class="material-icons md-36">logout</i>
                        </div>
                        <div class="text-white">Logout</div>
                    </a>
                    </form>
                </div>
            </div>
           {{-- <a href="#" ">
            <div class=" h-28  border-r border-b flex flex-col justify-center items-center">
                <div class="text-white">
                    <i class="material-icons md-36">dashboard</i>
                </div>
                <div class="text-white">All</div>
            </div>
           </a>
          <a href="#" wire:click="$set('tab', 'room')">
            <div class=" h-28 border-b flex justify-center flex-col items-center">
                <div class="text-white">
                    <i class="material-icons md-36">meeting_room</i>
                </div>
                <div class="text-white">Room</div>
            </div>
          </a>
           <a href="#" wire:click="$set('tab', 'profile')">
            <div class=" h-28 border-r border-b flex justify-center flex-col items-center">
                <div class="text-white">
                    <i class="material-icons md-36">person</i>
                </div>
                <div class="text-white">Profile</div>
            </div>
           </a>
           <a href="#">
            <div class=" h-28 border-b flex justify-center flex-col items-center">
                <div class="text-white">
                    <i class="material-icons md-36">logout</i>
                </div>
                <div class="text-white">Logout</div>
            </div>
           </a> --}}
          
         
        </div>
        <div class="bg-white w-9/12 p-10 px-14">
            @if ($tab == 'all')
            @include('livewire.customer.profile-all')
         @elseif($tab == 'room')
         @include('livewire.customer.profile-room')
         @elseif($tab == 'profile')
         @include('livewire.customer.profile-profile')
        
         @else
         @endif
        </div>
    </div>
</div>
