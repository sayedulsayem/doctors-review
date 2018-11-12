<?php

namespace App\Http\Controllers;

use App\Visitor;
use Session;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function login(){
        return view('welcome');
    }

    public function showSignUpPage(){
        return view('front.sign-up');
    }

    public function forgetPassword(){
        return view('front.home.forget-password');
    }

    public function home(){
        return view('front.home.home',[
            'visitor' => Visitor::all(),
        ]);
    }

    public function newVisitor(Request $request){
        Visitor::saveVisitorInfo($request);
        return redirect('/profile');
    }

    public function visitorLogout(Request $request){
        Session::forget('visitorId');
        Session::forget('visitorName');

        return redirect('/');
    }

    public function visitorSignIn(Request $request){
        $visitor = Visitor::where('email', $request->email)->first();

        if($visitor){
            if(password_verify($request->password, $visitor->password)){
                Session::put('visitorId', $visitor->id);
                Session::put('visitorName', $visitor->name);

                return redirect('/profile');
            }else{
                return redirect('/')->with('message', 'Password not valid');
            }
        }else{
            return redirect('/')->with('message', 'Email address not valid');
        }
    }
}
