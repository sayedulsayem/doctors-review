<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function login(){
        return view('front.login');
    }
    function register(){
        return view('front.register');
    }

}
