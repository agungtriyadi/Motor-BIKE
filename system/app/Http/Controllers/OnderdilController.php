<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onderdil;

class OnderdilController extends Controller
{
    public function index(){
        $datonderdil = onderdil::get();

       // $onderdil = Onderdil::get();
        
       $onderdil = onderdil::all();

       
       //dd($onderdil->toArray());
       // dd($onderdil->All()); 
                            
        return view('pages.onderdil')
                //->withOnderdil($onderdil)
                ->withData($onderdil)   
        ;
       
    }
}
