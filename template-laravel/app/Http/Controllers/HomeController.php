<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.master');
    }

    public function home(){
        return view('partial.home');
    }
}
