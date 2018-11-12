<?php

namespace App\Http\Controllers\Doctors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorsController extends Controller
{
    //
    public function home(){
        return view('front.doctors.welcome_doctors');
    }
}
