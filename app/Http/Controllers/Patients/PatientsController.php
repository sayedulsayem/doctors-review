<?php

namespace App\Http\Controllers\Patients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientsController extends Controller
{
    //
    public function home(){
        return view('front.patients.welcome_patients');
    }
}
