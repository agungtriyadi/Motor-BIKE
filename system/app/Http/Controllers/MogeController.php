<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImgMotor;
use App\Models\User;
use Auth;

class MogeController extends Controller
{

    public function Moge1(){ 
        $gambar = ImgMotor::get();
        //dd($motor->toArray());
        return view('pages.moge1')
            ->withData($gambar);
    }
}
