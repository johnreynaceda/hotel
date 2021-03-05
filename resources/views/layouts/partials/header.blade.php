<div class="bg-gray-800 z-30 h-20 shadow-lg sticky top-0 text-white flex space-x-2 p-1">
    <div class="w-6/12 flex items-center">
        <div class="ml-20">
            <img src="{{ asset('images/starhotellogo.png') }}" class="h-16" alt="">
        </div>
    </div>
    <div class=" w-6/12 flex justify-end items-center">
    <div class="mr-20">
        <div class="flex flex-col space-y-2 justify-end">
            <div class="flex space-x-2 text-gray-500 text-xs">
                <h1>Phone Number: 09123456789  |</h1>
               <div class="account flex">
                  <a href="{{ route('customer-profile') }}" class="hover:text-white">
                    <h1>My Account |</h1>
                  </a>
               </div>
            </div>
            <div class="flex space-x-8 text-gray-300 justify-end text-sm font-bold">
                <a href="{{ route('customer-dashboard') }}"><h1>Home</h1></a>
                <a href=""><h1>Rooms</h1></a>
               @if (!auth()->check())
               <a href="{{ route('login') }}"><h1>Login</h1></a>
               <a href="{{ route('register') }}"><h1>Register</h1></a>
               @endif
                <a href=""><h1>About</h1></a>
                <a href=""><h1>Contact Us</h1></a>
            </div>
        </div>
    </div>
    </div>
</div>