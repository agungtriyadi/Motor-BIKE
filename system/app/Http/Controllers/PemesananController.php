<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Motor;   
use App\Models\Pemesanan;
use Auth;

class PemesananController extends Controller {

    public function index(Request $request, $id){

        //dd($request->toArray());

        // //dd(Auth::user()->id_pelanggan);
        
        $dataMotor = Motor::where('idmotor','=', $id)->first();

        $new_pemesanan = new Pemesanan();
        $new_pemesanan->id_pemesan      = Auth::user()->id_pelanggan;
        $new_pemesanan->id_motor        = $dataMotor->idmotor;
        $new_pemesanan->total           = $dataMotor->hargaMtr;

        $new_pemesanan->save();

        return redirect()->route('home');
    
    }
}