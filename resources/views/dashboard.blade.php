<x-app-layout>
    <x-slot name="header">
        <div class="positioncenter">
        <h5 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome To the E-Party,') }} Mr/Mrs {{ Auth::user()->name }}
        </h5>
    </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container1">
                        <div class="positioncenter">
                            <div class="btn-group" >
                              <button class= "button"><a href="{{ url('booking') }}" > + Booking form</a></button>
                              <button class= "button"><a href="{{ url('customer/bookingview') }}" > + booking view form</a></button><br>                         
                            </div>
                        </div>
                    </div> 
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
