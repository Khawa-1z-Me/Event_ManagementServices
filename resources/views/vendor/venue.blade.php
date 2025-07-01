<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('venue') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
				<div class="custom-btn btn-4">
                        <a href="/dashboardvendor"> Back </a><br><br> 
                    </div>
				<div class="container1">
                <form action = "venues" method = "post">
                @csrf

							<label for="namevenue">Name Venue </label>
                            <input type='text' name='namevenue' value= "">
	            
                            <label for="Typevenue">Type Venue</label>
                            <input type='text' name='Typevenue' value= "">

							<label for="addres">Address</label>
                            <input type='text' name='address' value= "">
	            
                            <label for="description">Description</label>
                            <input type='text' name='description' value= "">

							<label for="time">Time</label>
                            <input type='text' name='time' value= "">

                            <label for="prices">prices</label>
                            <input type='text' name='prices' value= "" placeholder="less than 100">

                            <label for="Email">Email</label>
                             <input type='text' name='email' value= "{{ Auth::user()->email }}"/>
	                    
	<input type = 'submit' value = "Add venue"/>
						</form>
					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
