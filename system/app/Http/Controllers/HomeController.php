<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\BerandaImage;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware(['web']);
    }
    
    public function index(){
       
       //dd($pelanggan->toArray());  
       //dd(Auth::User());
        $motor = Motor::get();
            
        //dd($image->toArray());
            return view('pages.home')
                ->withData($motor)
               // ->withimage($image)
            ;
    }

    public function User(){
        $pelanggan =  User::get();
        return $pelanggan;
    }

    

}
