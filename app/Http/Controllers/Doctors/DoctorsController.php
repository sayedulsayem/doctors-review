<?php

namespace App\Http\Controllers\Doctors;

use App\Doctor;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class DoctorsController extends Controller
{
    //
    public function home(){
        return view('front.doctors.welcome_doctors');
    }

    public function signUp(){
        return view('front.doctors.sign-up');
    }

    public function newSignUp(Request $request){

        //return $request;

        $data=new User();

        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->type=1;
        $data->save();

        Session::put('id',$data->id);
        Session::put('name',$data->name);
        Session::put('email',$data->email);
        Session::put('type',1);

        return redirect('/doctors')->with('msg','Registration has been successfully.');
    }

}
