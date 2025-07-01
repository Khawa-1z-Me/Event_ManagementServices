<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Option\cake;
use App\Models\Option\outfits;
use App\Models\Option\venues;
use App\Models\Option\foodbeverages;
use App\models\booking;

class FormController extends Controller
{
    function fillcake(Request $request){
	$data = $this->validateCake($request);

	cake::create($data);

	return redirect('/vendor/cakeview');
}

public function validateCake(Request $request){
	return $request->validate([
	'namecake' => 'required|string|max:255',
	'typecake' => 'required|string|max:100',
	'prices' => 'required|numeric|min:0',
	'email' => 'required|email|max:255']);
}

    function filloutfit(Request $request){
        $outfits=new outfits;
        $outfits->nameoutfit=$request->nameoutfit;
        $outfits->typeofoutfit=$request->typeofoutfit;
        $outfits->size=$request->size;
        $outfits->colour=$request->colour;
        $outfits->prices=$request->prices;
        $outfits->email=$request->email;
        $outfits->save();

        return redirect('/vendor/outfitview')->with('message', 'Profile saved successfully');
    }

    function fillvenue(Request $request){
        $venues=new venues;
        $venues->Typevenue=$request->Typevenue;
        $venues->namevenue=$request->namevenue;
        $venues->address=$request->address;
        $venues->description=$request->description;
        $venues->prices=$request->prices;
        $venues->time=$request->time;
        $venues->email=$request->email;
        $venues->save();

        return redirect('vendor/venueview');
    }

    function fillfoodbeverages(Request $request){
        $food=new foodbeverages;
        $food->typesfood=$request->typesfood;
        $food->Namefood=$request->Namefood;
        $food->participant=$request->participant;
        $food->description=$request->description;
        $food->prices=$request->prices;
        $food->email=$request->email;
        $food->save();

        return redirect('vendor/foodview');
    }
    function booking(Request $request){
        $booking=new booking;
        $booking->events=$request->events;
        $booking->namecake=$request->namecake;
        $booking->nameoutfit=$request->nameoutfit;
        $booking->namevenue=$request->namevenue;
        $booking->Namefood=$request->Namefood;
        $booking->email=$request->email;
        $booking->save();
        return redirect('dashboard');
    }
   
    function bookingselection ()

        {
    $cakes = DB::select("select idcake,namecake,email from cake");
    $outfits = DB::select("select idoutfit,nameoutfit,email from outfits");
    $venues = DB::select("select idvenue,namevenue,email from venues");
    $foods = DB::select("select idfood,Namefood,email from foodbeverages");
    return view('/customer/booking',compact('cakes','outfits','venues','foods'));   
    
    }
    
    
}
