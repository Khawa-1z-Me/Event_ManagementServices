<x-app-layout>
    <x-slot name="header">
    <div class="positioncenter">
        <h5 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BOOKING') }}
        </h5>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="custom-btn btn-4">
                        <a href="/dashboard"> Back </a><br><br> 
                        </div>
                    <div class="container1"> 
                        <div class="positioncenter">
                            <h1> How to Book?</h1>
                            <p text-align:left>1)You choose which categories to be include and also you can leave it blank as you don't intend to take particular categories.
                             <br>  2)Once you decide, you can click button submit and be mindful that once you click submit, You cannot change the book itself but only to delete it.
                            </p><br><br>
                            <div class="btn-group" >
                              <button class="button">  <a href="{{ url('customer/totalcakeview') }}"class="text-sm text-gray-700 underline">CAKE</a></button>
                                <button class="button"> <a href="{{ url('customer/totaloutfitview') }}" class="text-sm text-gray-700 underline">OUTFIT</a></button>
                               <button class="button"> <a href="{{ url('customer/totalvenueview') }}" class="text-sm text-gray-700 underline">VENUE</a></button>
                                <button class="button"><a href="{{ url('customer/totalfoodview') }}" class="text-sm text-gray-700 underline">FOOD</a></button><br><br>
                        </div>
                    </div>
                </div>
                    <div class="container1">
                        <form action="booking" method="post">
                            @csrf
                                <label for="events">Events</label>
                                <select id="Events" name="events">
                                    <option value="Reunion">Reunion</option>
                                    <option value="Wedding">Wedding</option>
                                    <option value="Corporate">Corporate</option>
                                    <option value="party">party</option>
                                    </select><br>
                                <label for="namecake">Cake</label>
                                <select id="namecake" name="namecake">
                                    <option value="">None </option>
                                    @foreach ($cakes as $cakeselect)
                                    <option value="{{$cakeselect->namecake}}">{{$cakeselect->namecake}}  {{$cakeselect->email}}</option>
                                    @endforeach
                                    </select><br>
                                <label for="nameoutfit">Outfit</label>
                                <select id="nameoutfit" name="nameoutfit">
                                    <option value="">None </option>
                                     @foreach ($outfits as $outfitselect)
                                    <option value="{{$outfitselect->nameoutfit}}">{{$outfitselect->nameoutfit}} {{$outfitselect->email}}</option>
                                    @endforeach
                                    </select><br>
                                <label for="namevenue">Venue</label>
                                <select id="namevenue" name="namevenue">
                                    <option value="">None</option>
                                    @foreach ($venues as $venueselect)
                                    <option value="{{$venueselect->namevenue}}">{{$venueselect->namevenue}} {{$venueselect->email}}</option>
                                    @endforeach
                                    </select><br>
                                <label for="Namefood">Food & Beverages</label>
                                <select id="Namefood" name="Namefood">
                                    <option value="">None </option><selected>
                                    @foreach ($foods as $foodselect)
                                    <option value="{{$foodselect->Namefood}}">{{$foodselect->Namefood}} {{$foodselect->email}}</option>
                                    @endforeach
                                    </select><br>
                                <label for="Email">Email</label>
                                <input type='text' name='email' value= "{{ Auth::user()->email }}"/>
                 
	        <input type = 'submit' value = "Add Booking"/>
                 </form>
                        
                    </div>
	</td>
	</tr>
	</table> 
                </div>   
            </div>
        </div>                
    </div>
</x-app-layout>
