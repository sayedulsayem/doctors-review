<?php

namespace App\Http\Controllers\Patients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class PatientsController extends Controller
{
    //
    public function home(){
        return view('front.patients.welcome_patients');
    }

    public function signUp(){
        return view('front.patients.sign-up');
    }

    public function editProfileView(){
        return view('front.patients.edit-profile');
    }

    public function newSignUp(Request $request){

        $data=new User();

        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->type=2;
        $data->save();

        Session::put('id',$data->id);
        Session::put('name',$data->name);
        Session::put('email',$data->email);
        Session::put('type',2);

        return redirect('/patients/edit-profile')->with('msg','Registration has been successfully.');
    }
}
