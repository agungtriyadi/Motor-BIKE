<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Motor;

class DataController extends Controller
{
    public function LoadingPage(){
        $dataMotor = Motor::Get();
        return view('admin.page.beranda_admin')
           ->withData($dataMotor)       
        ;
    }
}