<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Option\cake;
use App\Models\Option\outfits;
use App\Models\Option\foodbeverages;
use App\Models\Option\venues;
use App\Models\booking;

class ViewController extends Controller
{
        public function cakeview(){

                $user_email = Auth::user()->email;
                $cakeview = cake::where('email', $user_email)->get();
                return view('vendor/Cakeview',['cake'=>$cakeview]);
        }
        
        public function outfitview(){

                $user_email = Auth::user()->email;
                $outfitview = outfits::where('email', $user_email)->get();
                return view('vendor/outfitview',['outfits'=>$outfitview]);
        }
        public function venueview(){
        
                $user_email = Auth::user()->email;
                $venueview = venues::where('email', $user_email)->get();
                return view('vendor/venueview',['venues'=>$venueview]);
        }

        public function foodview(){
        
                $user_email = Auth::user()->email;
                $foodview = foodbeverages::where('email', $user_email)->get();
                return view('vendor/foodview',['food'=>$foodview]);
        }
    
        public function totalcakeview(){
                $totalcakeview = DB::select('select * from cake');
                $cake = cake::pluck('idcake', 'namecake');
                return view('customer/totalcakeview',['totalcake'=>$totalcakeview]);

                $cake = cake::pluck('idcake', 'namecake');
                $selectedID = 2;
                return view('customer/totalcakeview', compact('idcake', 'cake'));

        }
        public function totaloutfitview(){
                $totaloutfitview = DB::select('select * from outfits');
                return view('customer/totaloutfitview',['totaloutfits'=>$totaloutfitview]);

        }
        public function totalvenueview(){
                $totalvenueview = DB::select('select * from venues');
                return view('customer/totalvenueview',['totalvenue'=>$totalvenueview]);

        }
        public function totalfoodview(){
                $totalfoodview = DB::select('select * from foodbeverages');
                return view('customer/totalfoodview',['totalfood'=>$totalfoodview]);

        }

        public function bookingview(){
                $user_email = Auth::user()->email;
                $bookingviews = booking::where('email', $user_email)->get();
                return view('customer/bookingview',['booking'=>$bookingviews]);

        }

        function delete($idbooking) {
                $bookingviews=DB::delete('delete from booking where idbooking = ?',[$idbooking]);
                //$bookingviews->delete();
                //DB::delete('delete from booking where idbooking = ?',[$idbooking]);
                return redirect('customer/bookingview');
                }
        function allvendorlistorder(){
                $listorder=DB::select('select * from booking');
                return view('vendor/vendororder',['vendororder'=>$listorder]);
        }
        //selection view

       /* public function cakeselection(){

                  $cakeselection = DB::select('select idcake from cake');
                  $namecake = DB::select('select namecake from cake');

                  return view('customer/totalcakeview',['cakeselect'=>$cakeselection]);
        }*/
}

