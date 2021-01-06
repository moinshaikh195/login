<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class LoginController extends Controller
{
    
    function registeration(Request $req){
        $register = new Register;
        $register->name = $req->name;
        $register->email = $req->email;
        $register->password = $req->password;
        $register->number = $req->number;
        $register->save();
        return redirect('register');

        
        //$data= $req->input();
        //return view('register',['data'=>$data]);
        //return $data;
    }
}
