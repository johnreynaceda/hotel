@extends('layouts.customer')
@section('content')
@livewire('booking')
<div class=" bg-gray-800 mt-20 text-white border-t-2 border-white">
    <div class="md:px-15 px-7 pt-10 grid md:grid-cols-3 gap-4">
        <div class="flex space-x-3 justify-center">
            <img src="{{ asset('images/starhotellogo.png') }}" class="ml-3 h-40" alt="logo">
        </div>
    
        <div class="space-y-5">
            <div class="flex items-center space-x-4">
                <span class="material-icons text-gray-900 0">local_phone</span>
                <div class="flex flex-col">
                    <span class="text-gray-500 text-sm">Call support:</span>
                    <span>(+63) 9262800169</span>
                    <span>(+63) 9067932788</span>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <span class="material-icons text-gray-500 ">message</span>
                <div class="flex flex-col">
                    <span class="text-gray-500 text-sm">Reach as via e-mail:</span>
                    <span>logistics.j7solution@gmail.com</span>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <span class="material-icons text-gray-500 ">location_on</span>
                <div class="flex flex-col">
                    <span class="text-gray-500 text-sm">Our location:</span>
                    <span>Kenram, Isulan, Sultan Kudarat</span>
                </div>
            </div>
        </div>
    
        <div>
            <h1>Get in touch with us</h1>
            <div class="mb-4 mt-2 border rounded-md flex items-center">
                <input type="email" placeholder="Enter your valid email" class="px-2 py-3 focus:outline-none flex-1 text-black rounded-tl-md rounded-bl-md w-32">
                <button class="material-icons bg-gray-900 px-4 py-3 rounded-tr-md rounded-br-md">east</button>
            </div>
           
            <div class="mt-3">
                <h1>Follow us:</h1>
                <div class="mt-3 text-2xl">
                    <a href="#"><span class="material-icons text-gray-500">facebook</span></a>
                </div>
            </div>

        </div>
    </div>

    <div class="text-center pb-5 pt-7">
        <p class="text-sm">Powered by <a href="http://www.j7solution.com/" target="_blank" class="hover:underline">J7 IT Solutions</a>.</p>
    </div>
</div>
@endsection