<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function pageLogin(Request $request){               
        $request->session()->forget('id_admin');
        return view('login');
    }
    public function logout(){
       
        return redirect()->route('login');
    }
    
}
