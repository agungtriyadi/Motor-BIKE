<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LosmenController extends Controller
{
    public function index(){
        return view('pages.losmen');
    }
}
