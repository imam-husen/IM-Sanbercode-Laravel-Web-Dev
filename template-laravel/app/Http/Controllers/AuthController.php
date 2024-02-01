<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(Request $request){
        $namadepan = $request['firstname'];
        $namabelakang = $request['lastname'];

        return view('partial.signup',["namadepan" => $namadepan, "namabelakang" => $namabelakang]);
    }

    public function register(){
        return view("partial.register");
    }
}
