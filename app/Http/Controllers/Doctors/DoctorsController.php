<?php

namespace App\Http\Controllers\Doctors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\Return_;

class DoctorsController extends Controller
{
    //
    public function home(){
        return view('front.doctors.welcome_doctors');
    }

    public function signUp(){
        return view('front.doctors.sign-up');
    }
}
