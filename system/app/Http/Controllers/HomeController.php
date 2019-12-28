<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class HomeController extends Controller
{
    public function index(){
       $kamar =  Kamar::get();
       dd($kamar->toArray(  ));
        return view('pages.home');
    }


}
