<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cake') }}
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
                <form action = "cake" method = "post">
                @csrf
                            <label for="cakename">Name Cake</label>
                            <input type='text' name='namecake' value= "">
	            
                            <label for="typecake">Type Cake</label>
                            <input type='text' name='typecake' value= "">

                            <label for="price">prices</label>
                            <input type='text' name='prices' value= "" placeholder="less than 100">

                            <label for="Email">Email</label>
                             <input type='text' name='email' value= "{{ Auth::user()->email }}"/>

                           
	
	<input type = 'submit' value = "Add cake"/>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
