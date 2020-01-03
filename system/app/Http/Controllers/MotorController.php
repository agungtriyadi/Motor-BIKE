<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class MotorController extends Controller
{
    public function index(){
        $datamotor = motor::get();

       // $motor = Motor::get();
        
       $motor = motor::all();

       
       //dd($onderdil->toArray());
       // dd($onderdil->All()); 
                            
        return view('pages.Motor')
                //->withOnderdil($onderdil)
                ->withData($motor)   
        ;
       
    }
}
