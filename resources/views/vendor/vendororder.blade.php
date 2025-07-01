<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ALL CUSTOMER LIST ORDER') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="custom-btn btn-4">
                        <a href="/dashboardvendor"> Back </a><br><br> 
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="table-wrapper">
                                <table class="fl-table">
                                   <thead class="thead-light">
                    <tr>
                        <td>Events</td>
                        <td>Name Cake </td>
                        <td>Name Outfits</td>
                        <td>Name Venue</td>
                        <td>Name food</td>
                        <td>email</td>
                    
                        </tr>
                        </th>
                        @foreach ($vendororder as $book)
                        <tbody>
                    <tr>
                        <td>{{ $book->events }}</td>
                        <td>{{ $book->namecake }}</td>
                        <td>{{ $book->nameoutfit}}</td>
                        <td>{{ $book->namevenue}}</td>
                        <td>{{ $book->namefood}}</td>
                        <td>{{ $book->email}}</td>
                        
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
    </div>
</x-app-layout>