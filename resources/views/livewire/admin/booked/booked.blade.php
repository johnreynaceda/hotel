<div>
    <div class="card-body">
        <div class="col-lg-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input wire:model="search" type="text" class="form-control" placeholder="Search Booked">
              </div>
        </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th width="5">#</th>
          <th>REFERENCE</th>
          <th>ARRIVAL</th>
          <th>DEPARTURE</th>
          <th>TOTAL COST</th>
          
          <th>ACTIONS</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i=1;
        @endphp
        @forelse ($bookeds as $booked)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $booked->reference }}</td>
            <td>{{ $booked->arrival }}</td>
            <td>{{ $booked->departure }}</td>
            @php
            $start = Carbon\Carbon::parse($booked->arrival);
            $end = Carbon\Carbon::parse($booked->departure);
           $days = $start->diffInDays($end);
           
         @endphp
            <td>&#8369;{{ number_format($booked->room->price *  $days,2) }}</td>
            <td>
                <div class="flex flex-col space-y-2 text-white">
                <button wire:click.prevent="approved({{ $booked->id }})" class="bg-green-500">Approved</button>
                <button class="bg-red-500">Decline</button>
                </div>
            </td>
          </tr>
        @empty
            
        @endforelse
      
        </tbody>

      </table>
    </div>
</div>
