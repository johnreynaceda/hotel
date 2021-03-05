<div>
    <div class="flex items-end space-x-3">
        <img src="{{ asset('images/booked.png') }}" class="h-8" alt="">
        <h1 class="text-xl font-bold">MY ROOM BOOKINGS</h1>
    </div>
    <h1 class="text-gray-400">View all of your hotel room bookings here.</h1>

    <div class="table w-full mt-5">
        <table class="text-left w-full border-collapse "> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead class="bg-side text-gray-800">
              <tr class="">
                <th width="10" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">#</th>
                <th width="450" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">Reference No.</th>
                <th width="450" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">Arrival</th>
                <th width="450" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">Departure</th>
                <th width="450" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">Total Cost</th>
                <th width="450" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">Status</th>
                
                <th width="50" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
             @php
                 $i=1;
             @endphp
             @forelse ($bookeds as $booked)
             <tr class=" text-sm">
                <td class="py-2 px-2 border-b ">{{ $i++ }}</td>
                <td class="py-2 px-2 border-b ">{{ $booked->reference }}</td>
                <td class="py-2 px-2 border-b ">{{ $booked->arrival }}</td>
                <td class="py-2 px-2 border-b ">{{ $booked->departure }}</td>
                @php
                   $start = Carbon\Carbon::parse($booked->arrival);
                   $end = Carbon\Carbon::parse($booked->departure);
                  $days = $start->diffInDays($end);
                  
                @endphp
                <td class="py-2 px-2 border-b ">&#8369;{{ number_format($booked->room->price *  $days,2) }}</td>
                @if($booked->status == 0)
                <td class="py-2 px-2 border-b "><span class="bg-yellow-500 px-4 rounded-full text-white">Pending</span></td>
                @elseif($booked->status == 1)
                <td class="py-2 px-2 border-b "><span class="bg-green-500 px-4 rounded-full text-white">Aprroved</span></td>
                @else
                <td class="py-2 px-2 border-b "><span class="bg-red-500 px-4 rounded-full text-white">Declined</span></td>
                @endif
                @if($booked->status == 0)
                <td class="py-2 px-2 border-b "><span class="bg-red-500 px-4 rounded-full text-white">Cancel</span></td>
                @elseif($booked->status == 1)
                <td class="py-2 px-2 border-b "><span class="bg-red-500 px-4 rounded-full text-white">Delete</span></td>
                @else
                <td class="py-2 px-2 border-b "><span class="bg-red-500 px-4 rounded-full text-white">Delete</span></td>
                @endif
            </tr>
            
             @empty
                 
             @endforelse
              
            </tbody>
          </table>
    </div>
</div>