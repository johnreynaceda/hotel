<section class="content">
   
    <div class="container-fluid">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-3">
                    @if ($updateMode)
                @include('livewire.admin.room.room-update')
                @else
                @include('livewire.admin.room.room-create')
                @endif
                </div>
                <div class="row">
                    
                    <div class="col-lg-8">
                      <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">List of Room</h3>
                          </div>
                          <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input wire:model="search" type="text" class="form-control" placeholder="Search Room">
                              </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th width="5">#</th>
                                  <th>NAME</th>
                                  <th>PRICE</th>
                                  <th>DESCRIPTION</th>
                                  <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1;?>
                                  @forelse ($rooms as $room)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $room->name }}</td>
                                    <td>{{ number_format($room->price,2) }}</td>
                                    <td>{{ $room->description }}</td>
                                    <td class="text-center">
                                      <button class="btn btn-success btn-sm" wire:click="view({{ $room->id }})"><i class="fa fa-eye"></i></button>
                                    </td>
                                  </tr>
                                 @empty
                                
                                 @endforelse
                                </tbody>
        
                              </table>
                             
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                             <div class="main">
                                 <div class="flex space-x-2">
                                     <h5>Name:</h5>
                                     <h5>{{ $tname }}</h5>
                                 </div>
                                 <div class="flex space-x-2">
                                     <h5>Price:</h5>
                                     <h5>&#8369; {{ number_format($tprice,2) }}</h5>
                                 </div>
                                 <div class="mt-3">
                                     <div class=" h-40 w-full">
                                      <img src="{{ asset('/storage/rooms/' . $lastphoto) }}" class="h-40 w-full">
                                     </div>
                                 </div>
                             </div>
                             
                            </div>
                            <div class="card-footer">
                                <button wire:click.prevent="save" type="submit" class="btn btn-warning">Edit</button>
                                <button wire:click.prevent="save" type="submit" class="btn btn-danger">Delete</button>
                              </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
          </section>
    </div>
    

  </section>