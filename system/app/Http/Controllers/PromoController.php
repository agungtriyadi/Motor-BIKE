<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\Promo;

class PromoController extends Controller
{
    public function index(){
        $motor = Motor::get();
        $promo = Promo::get();
        //dd($promo->All()); 
        
       

        return view('pages.promo')
                    ->withData($motor)
                    ->withPromo($promo)      
        ;
       
    }
}
