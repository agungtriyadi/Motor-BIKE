<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PutraBangsaController extends Controller
{
    public function index(){
        return view('pages.putra_bangsa');
    }
}