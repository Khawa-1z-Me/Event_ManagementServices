<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking view') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="custom-btn btn-4">
                        <a href="/dashboard"> Back </a><br><br> 
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="table-wrapper">
                                 <table class="fl-table">
                                    <thead class="thead-light">
                    <tr>
                        <td>ID Booking</td>
                        <td>ID cake</td>
                        <td>ID outfit</td>
                        <td>ID venue</td>
                        <td>ID Food</td>
                        <td>email</td>
                        <td>Delete</td>
                    
                        </tr>
                        </th>
                        @foreach ($booking as $booking)
                    <tbody>
                    <tr>
                        <td>{{ $booking->idbooking }}</td>
                        <td>{{ $booking->namecake}}</td>
                        <td>{{ $booking->nameoutfit}}</td>
                        <td>{{ $booking->namevenue}}</td>
                        <td>{{ $booking->namefood}}</td>
                        <td>{{ $booking->email}}</td>
                        <td><a href={{"delete/".$booking['idbooking']}}><img  src="{{url('/images/icon-delete-16.png')}}" alt="Image" style="width:20px;height:15px;"/></a></td>
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