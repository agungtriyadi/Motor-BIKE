<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Motor;
use Auth;

class Pemesanan extends Controller
{
    public function index(Request $request, $id){

       // $promo = Promo::get();
        
       $promo = Promo::all();
       $image = BerandaImage::get();

        return view('pages.promo')
                //->withPromo($promo)
                ->withpromo($promo)
                ->withimage($image)     
        ;
       
    }
}