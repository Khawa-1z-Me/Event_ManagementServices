<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Outfit') }}
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
                	<form action = "outfits" method = "post">
                @csrf

							<label for="nameoutfit">Name Of Outfits</label>
                            <input type='text' name='nameoutfit' value= "">
	            
                            <label for="typeofoutfit">Type of outfit</label>
                            <input type='text' name='typeofoutfit' value= "">

							<label for="size">Size Outfits</label>
                            <input type='text' name='size' value= "">
	            
                            <label for="colour">Colour </label>
                            <input type='text' name='colour' value= "">

                            <label for="prices">prices</label>
                            <input type='text' name='prices' value= "" placeholder="less than 100">

                            <label for="Email">Email</label>
                             <input type='text' name='email' value= "{{ Auth::user()->email }}"/>
	                    
	
	<input type = 'submit' value = "Add outfit"/>
	</form>	
					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
