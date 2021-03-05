@extends('layouts.customer')
@section('content')
<div class="bg-gray-800 h-100 ">
    <div  data-flickity="{
        &quot;cellAlign&quot;: &quot;left&quot;,
        &quot;prevNextButtons&quot;: true,
        &quot;pageDots&quot;: true,
        &quot;contain&quot;: false,
        &quot;autoPlay&quot;: 5000,
        &quot;wrapAround&quot;: true}"  class="w-full  main-carousel flickity-enabled is-draggable " tabindex="0">
       
        <div class="carousel-cell shadow-md relative h-100  w-full ">
            {{-- <img src="{{ asset('images/carousel1.jpg') }}" class="absolute opacity-50" alt=""> --}}
           <div class="h-full absolute flex items-center justify-center">
               <img src="{{ asset('images/carousel1.jpg') }}" class="h-100 opacity-50 shadow-md" alt="">
           </div>
            <div class="relative text-white">
                <div class="h-100 flex flex-col px-40 items-center justify-center">
                    <h1 class="font-black text-6xl text-yellow-300">STAR HOTEL</h1>
                    <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, corrupti dolor veritatis quam libero soluta dolores blanditiis autem esse in atque, et perferendis vero minima ea reiciendis tenetur beatae. Illo.</h1>
                </div>
            </div>
        </div>
        <div class="carousel-cell shadow-md relative h-100  w-full ">
            {{-- <img src="{{ asset('images/carousel1.jpg') }}" class="absolute opacity-50" alt=""> --}}
           <div class="h-full absolute flex items-center justify-center">
               <img src="{{ asset('images/carousel2.jpg') }}" class="h-100 opacity-50 shadow-md" alt="">
           </div>
            <div class="relative text-white">
                <div class="h-100 flex flex-col px-40 items-center justify-center">
                    <h1 class="font-black text-6xl text-yellow-300">STAR HOTEL</h1>
                    <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, corrupti dolor veritatis quam libero soluta dolores blanditiis autem esse in atque, et perferendis vero minima ea reiciendis tenetur beatae. Illo.</h1>
                </div>
            </div>
        </div>
       
</div>

</div>
<div class="room mt-12 py-4">
<h1 class="text-center text-4xl font-bold text-gray-800">OUR HOTEL ROOMS</h1>
<div class="flex justify-center text-yellow-400">
    <h1>-------------------</h1>
    <i class="material-icons">star</i>
    <i class="material-icons">star</i>
    <i class="material-icons">star</i>
    <i class="material-icons">star</i>
    <i class="material-icons">star</i>
    <h1>-------------------</h1>
</div>
<div class="flex justify-center mt-3 mb-3">
    <h1 class="text-lg text-gray-800">Every hotel stay provides you with great experience and hospitality.</h1>
</div>
<div class="flex mx-24">
   @livewire('customer-room')   
</div>
<div class="flex justify-center mt-10 text-yellow-400">
    <h1>-------------------</h1>
    <i class="material-icons">star</i>
    <i class="material-icons">star</i>
    <i class="material-icons">star</i>
    <i class="material-icons">star</i>
    <i class="material-icons">star</i>
    <h1>-------------------</h1>
</div>
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
</div>
@endsection