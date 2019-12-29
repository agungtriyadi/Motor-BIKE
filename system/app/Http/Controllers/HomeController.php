<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
       
       //dd($pelanggan->toArray());      
        return view('pages.home');
    }

    public function User(){
        $pelanggan =  User::get();
        return $pelanggan;
    }

}
