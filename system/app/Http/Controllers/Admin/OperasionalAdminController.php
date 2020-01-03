<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
Use Hash;
Use Validator;
Use App\Models\Admin;

class OperasionalAdminController extends Controller
{
    public function LoginAdmin(Request $request){

        

        $validator = Validator::Make($request -> all(),
            [
                'namaAdmin' => 'required',
                'password'  => 'required'
            ],

            ['namaAdmin.required'=>'Nama Admin isi!','password.required'=>'Password diisi!']
        );
        

        if ($validator->fails()){
            return response()->json([
                'status' => 500,
                'message' => 'Nama dan Password Harus Diisi !!!!'
            ]);
        }

        $credentials = $request->only('namaAdmin','password');

            $nama = $request->namaAdmin;
            $password = $request->password;

            if (Auth::attempt($credentials)) {
                return redirect()->route('data_admin');
            }else{
                return response()->json([
                    'status'    => 500,
                    'message'   => 'Nama dana Password Salah'
                ]);
            }


    }
}