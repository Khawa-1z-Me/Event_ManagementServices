<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FOOD ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="panel-body">
                        <div class="row">
                        <div class="custom-btn btn-4">
                        <a href="/booking"> Back </a><br><br> 
                        </div>
                            <div class="table-wrapper">
                                 <table class="fl-table">
                                    <thead class="thead-light">
                
                    <tr>
                        <td>ID</td>
                        <td>Type</td>
                        <td>Name</td>
                        <td>participant</td>
                        <td>Description</td>
                        <td>Prices</td>
                        <td>email</td>
                    
                        </tr>
                        @foreach ($totalfood as $food)
                    <tr>
                        <td>{{ $food->idfood }}</td>
                        <td>{{ $food->typesfood }}</td>
                        <td>{{ $food->Namefood}}</td>
                        <td>{{ $food->participant}}</td>
                        <td>{{ $food->description}}</td>
                        <td>RM{{ $food->prices}}</td>
                        <td>{{ $food->email}}</td>
                        
                        </td>
                    </tr>
@endforeach
                                </table>                       
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>