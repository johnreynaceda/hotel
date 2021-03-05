<div>
    <div class="card-body">
        <div class="col-lg-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input wire:model="search" type="text" class="form-control" placeholder="Search Check-In">
              </div>
        </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th width="5">#</th>
          <th>REFERENCE</th>
          <th>ROOM</th>
          <th>DEPARTURE</th>
          <th>ACTIONS</th>
        </tr>
        </thead>
        <tbody>
        
        @forelse ($checkins as $check)
        <tr>
            <td>1</td>
            <td>{{ $check->booked->reference }}</td>
            <td>{{ $check->booked->room->name }}</td>
            <td>{{ $check->booked->departure }}</td>
            <td>
                <div class="flex flex-col space-y-2 text-white">
                <button wire:click.prevent="checkout({{ $check->id }})" class="bg-red-500">Checkout</button>
                </div>
            </td>
            
           
          </tr>
        @empty
            
        @endforelse
      
        </tbody>

      </table>
    </div>
</div>
