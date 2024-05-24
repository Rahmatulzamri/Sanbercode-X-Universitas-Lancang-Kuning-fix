<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('page.form');
    }
    public function welcome(Request $request){
        $fname = $request->input('first_name');
        $lname = $request->input('last_name');
        $gender = $request->input('gender');
        $negara = $request->input('nationality');
        $bahasa = $request->input('lenguage');
        $pesan = $request->input('message');

        return view('page.welcome', ['fname'=> $fname, 'lname'=>$lname, 'gender'=>$gender, 'negara'=>$negara,'bahasa'=>$bahasa, 'pesan'=>'$pesan']);
    }
}
