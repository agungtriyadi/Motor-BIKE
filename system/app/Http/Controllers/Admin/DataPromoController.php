<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;

class DataPromoController extends Controller
{
    public function index(){
        $dataPromo = Promo::all();


        //dd($dataPelanggan->toArray());  
        return view('admin.page.data_promo')
            ->withData($dataPromo)       
        ;
    }
}