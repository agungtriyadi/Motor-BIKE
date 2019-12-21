<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function I_Login(){
        return view('login/login');
    }
}
