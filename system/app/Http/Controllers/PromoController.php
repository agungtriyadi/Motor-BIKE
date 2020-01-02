<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Motor;

class PromoController extends Controller
{
    public function index(){
        $motor = Motor::get();

       // $promo = Promo::get();
        
       $promo = Promo::all();

       
       //dd($promo->toArray());
       // dd($promo->All()); 
                            
        return view('pages.promo')
                //->withPromo($promo)
                ->withData($motor) 
                ->withPromo($promo)     
        ;
       
    }
}
