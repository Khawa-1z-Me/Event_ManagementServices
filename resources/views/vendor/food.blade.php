<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('food') }}
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
                	<form action = "food" method = "post">
                @csrf
							<label for="Namefood">Name food</label>
                            <input type='text' name='Namefood' value= "">
	            
                            <label for="typesfood">Type Cake</label>
                            <input type='text' name='typesfood' value= "">

                            <label for="participant">Participant</label>
                            <input type='text' name='participant' value= "">

							<label for="description">Description</label>
                            <input type='text' name='description' value= "">
	        
                            <label for="prices">prices</label>
                            <input type='text' name='prices' value= "" placeholder="less than 100">

                            <label for="email">Email</label>
                            <input type='text' name='email' value= "{{ Auth::user()->email }}"/>

			<input type = 'submit' value = "Add venue"/>
			</form>
					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
