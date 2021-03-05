<div>
    <div class="flex items-end space-x-3">
        <img src="{{ asset('images/profile.png') }}" class="h-8" alt="">
        <h1 class="text-xl font-bold">EDIT PROFILE</h1>
    </div>
    <h1 class="text-gray-400">Update your profile details using this form.</h1>
    <div class="form mt-5 border p-10 bg-gray-300 border-blue-400">
        <form action="" class="flex w-full">
            <div class="w-6/12 flex flex-col px-10  justify-center items-center">
                <div class="mb-2 text-gray-700 w-full">
                    <label class="font-bold" for="">Firstname</label>
                    <input type="text" wire:model="fname" name="" id="" class="h-10  w-full rounded-md border-none shadow-md">
                </div>
                <div class="mb-2 text-gray-700 w-full">
                    <label class="font-bold" for="">Middlename</label>
                    <input type="text" wire:model="mname" name="" id="" class="h-10  w-full  rounded-md border-none shadow-md">
                </div>
                <div class="mb-2 text-gray-700 w-full">
                    <label class="font-bold" for="">Lastname</label>
                    <input type="text" wire:model="lname" name="" id="" class="h-10  w-full  rounded-md border-none shadow-md">
                </div>
            </div>
            <div class="w-6/12 flex flex-col px-10  items-center ">
                <div class="mb-2 text-gray-700 w-full">
                    <label class="font-bold" for="">Email</label>
                    <input type="text" wire:model="email" name="" id="" class="h-10  w-full rounded-md border-none shadow-md">
                </div>
                <div class="mb-2 text-gray-700 w-full">
                    <label class="font-bold" for="">Contact</label>
                    <input type="text" name="" wire:model="contact" id="" class="h-10  w-full rounded-md border-none shadow-md">
                </div>
                <div class="mt-5">
                    <button class="bg-blue-500 p-2 px-6 text-white font-bold shadow-md rounded-md">Save</button>
                </div>
            </div>
        </form>
    </div>
    
</div>