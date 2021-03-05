<div>
    <div class="col-lg" x-data="{ show: @entangle('addModal') }" x-cloak>
        <button class="btn btn-primary " wire:click.prevent="add" >Add Room</button>
        <div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0,0,0,.5);" x-show="show">
            <div class="text-left bg-white h-auto mx-96  mt-20" @click.away="show = false">
                <div class="flex bg-nav text-side">
                    <div class=" px-3 py-2 font-medium text-lg w-11/12">
                     <h4>Add Room</h4>
                 </div>
                    <div class=" flex justify-center items-center w-1/12">
                     <div @click="show = false" class="hover:text-red-600 p-1 cursor-pointer  flex justify-center items-center"><i class="fa fa-window-close text-lg"></i></div>
                 </div>
                </div>
                <div class="body bg-white ">
                    <form class="px-5 py-3" action="">
                        <div class="mb-2 ">
                            <label for="">Name:</label>
                            <input wire:model="name" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Name">
                       
                        </div>
                        <div class="mb-2 ">
                            <label for="">Price:</label>
                            <input wire:model="price" type="number" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="&#8369; 0.00">
                       
                        </div>
                        <div class="mb-2 ">
                            <label for="">Description:</label>
                           <textarea wire:model="des" name="" id="" cols="30" rows="10" class="h-20 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border"></textarea>
                        </div>
                        <div class="mb-2 ">
                            <label for="">Image:</label>
                            <input type="file" wire:model="photo" />
                        </div>
                        <div class="mb-2 flex justify-end">
                            <button wire:click.prevent="save" class="bg-green-600 focus:outline-none flex rounded-md shadow-md text-white hover:bg-green-600 cursor-pointer p-2">
                                <h5 class="">SAVE</h5>
                            </button>
                          </div>
                    </form>
                   </div>
               </div>
            </div>
       </div>
</div>