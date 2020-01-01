<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\User;
use Auth;

class MogeController extends Controller
{

    public function Moge1(){ 
        $motor = Motor::get();
        return view('pages.moge1')
            ->withData($motor);
    }
}
