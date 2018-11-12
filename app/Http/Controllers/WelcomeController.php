<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function home(){
        return view('index');
    }
    function register(){
        return view('front.register');
    }

}
