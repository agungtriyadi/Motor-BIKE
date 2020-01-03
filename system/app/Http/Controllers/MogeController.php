<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\User;
use Auth;

class MogeController extends Controller
{

    public function Moge1(Request $request, $id){ 
        $dataMotor = Motor::where('idmotor','=', $id)->first();
        //dd($motor->toArray()); 
        return view('pages.moge1', ['data' => $dataMotor]);
    }
}
