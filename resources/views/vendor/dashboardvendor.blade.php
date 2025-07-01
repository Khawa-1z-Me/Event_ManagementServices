<x-app-layout>
    <x-slot name="header">
        <h5 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard vendor') }}
        </h5>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container3">
                        <div class="positioncenter">
                            <h1> How to insert item as Vendor?</h1><br>
                         <p>1) Choose any categories that provided in below section. One vendor can insert multiple items with multiple categories.<br>
                            2) Insert all the information in the form field provided on the page (You cannot leave it blank)<br>
                            3) Click submit once you already insert all essential in the form field provided.<br>
                            4) Proceed to the categories to see all the details items on every categories.</p><br><br>

                            <div class="btn-group" >
                               <button class="button"> <a href="{{ url('cake') }}" class="text-sm text-gray-700 underline">+Cake</a></button>
                               <button class="button"> <a href="{{ url('outfit') }}" class="text-sm text-gray-700 underline">+Outfit</a></button>
                               <button class="button"> <a href="{{ url('venue') }}" class="text-sm text-gray-700 underline">+venue</a></button>
                               <button class="button"> <a href="{{ url('food') }}" class="text-sm text-gray-700 underline">+food</a></button>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="container2">
                        <div class="positioncenter">
                            <div class="btn-group" >
                               <button class="button"><a href="{{ url('vendor/cakeview') }}" class="text-sm text-gray-700 underline">Cakeview</a></button>
                               <button class="button"><a href="{{ url('vendor/outfitview') }}" class="text-sm text-gray-700 underline">Outfitview</a></button>
                               <button class="button"><a href="{{ url('vendor/venueview') }}" class="text-sm text-gray-700 underline">Venueview</a></button>
                               <button class="button"><a href="{{ url('vendor/foodview') }}" class="text-sm text-gray-700 underline">Foodview</a></button>
                               <button class="button"><a href="{{ url('vendor/vendororder') }}" class="text-sm text-gray-700 underline">Book vendor list</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
