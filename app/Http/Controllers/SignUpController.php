<?php

namespace App\Http\Controllers;

use App\Patients;
use Session;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function login(){
        return view('front.login');
    }

    public function showSignUpPage(){
        return view('front.sign-up');
    }

    public function forgetPassword(){
        return view('front.home.forget-password');
    }

    public function home(){
        return view('front.home.home',[
            'visitor' => Patients::all(),
        ]);
    }

    public function newVisitor(Request $request){
        Patients::savePatientInfo($request);
        return redirect('/patients');
    }

    public function visitorLogout(Request $request){
        return "logout";
//        Session::flush();
//        Session::forget('visitorId');
//        Session::forget('visitorName');

        return redirect('/login');
    }

    public function visitorSignIn(Request $request){
        $visitor = Patients::where('email', $request->email)->first();
        return "login";

        if($visitor){
            if(password_verify($request->password, $visitor->password)){
                Session::put('visitorId', $visitor->id);
                Session::put('visitorName', $visitor->name);

                return redirect('/clients');
            }else{
                return redirect('/login')->with('message', 'Password not valid');
            }
        }else{
            return redirect('/login')->with('message', 'Email address not valid');
        }
    }
}
