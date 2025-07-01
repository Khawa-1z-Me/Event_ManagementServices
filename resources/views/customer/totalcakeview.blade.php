<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CAKE') }}
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
                        <td>Id</td>
                        <td>Cake Name</td>
                        <td>Cake Type</td>
                        <td>price</td>
                        <td>email</td>
                    
                        </tr>
                        </th>
                        @foreach ($totalcake as $cake)
                    <tbody>
                    <tr>
                        <td>{{ $cake->idcake }}</td>
                        <td>{{ $cake->namecake }}</td>
                        <td>{{ $cake->typecake}}</td>
                        <td>RM {{ $cake->prices}}</td>
                        <td>{{ $cake->email}}</td>
                        </td>
                    </tr>
@endforeach
</tbody>
                                 </table>
                            </div>
                        </div>    
                    </div> 
            </div>
        </div>
    </div>
</x-app-layout>