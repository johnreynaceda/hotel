<div>
    <div class="grid grid-cols-3 gap-3">
        @forelse ($rooms as $room)
        <a href="{{ route('customer-booking',['id' => $room->id]) }}" class=" transform transition duration-200 cursor-pointer hover:-translate-y-1 hover:scale-100">
            <div class="bg-gray-700 relative h-64 w-96 shadow-md">
                <img src="{{ asset('/storage/rooms/' . $room->image->url) }}" class="w-full h-full opacity-75 absolute" alt="">
                <div class=" relative ">
                   <div class="flex flex-col justify-end px-5 bg-gray-900 mt-40 py-2 absolute">
                       <h1 class="text-xl font-bold text-white">{{ $room->name }}</h1>
                       <h1 class="text-2xl font-bold text-red-500">&#8369;{{ number_format($room->price) }}</h1>
                   </div>
                </div>
            </div>
        </a>
        @empty
            
        @endforelse
      </div>
</div>
