<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DataPelangganController extends Controller
{
    public function index(){
        $dataPelanggan = User::Get();

        //dd($dataPelanggan->toArray());  
        return view('admin.page.data_pelanggan')
           ->withData($dataPelanggan)       
        ;
    }
}