<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' OUTFIT ') }}
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
                        <td>Name</td>
                        <td>Type </td>
                        <td>Size :</td>
                        <td>Colour</td>
                        <td>price</td>
                        <td>email</td>
                    
                        </tr>
                        @foreach ($totaloutfits as $outfits)
                    <tr>
                        <td>{{ $outfits->idoutfit }}</td>
                        <td>{{ $outfits->nameoutfit }}</td>
                        <td>{{ $outfits->typeofoutfit}}</td>
                        <td>{{ $outfits->size}}</td>
                        <td>{{ $outfits->colour}}</td>
                        <td>RM {{ $outfits->prices}}</td>
                        <td>{{ $outfits->email}}</td>
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
    </div>
</x-app-layout>