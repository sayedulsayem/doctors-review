<?php

namespace App\Http\Controllers;

use App\Patient;
use App\User;
use Session;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function getLoginView(){
        return view('front.login');
    }

    public function showSignUpPage(){
        return view('front.sign-up');
    }

    public function login(Request $request){

        return "login function";

        $userById= User::where('email',$request->email)->first;

        return $userById;

//        if ($userById->password == $request->password){
//
//            Session::put('id',$userById->id);
//            Session::put('name',$userById->name);
//            Session::put('email',$userById->email);
//            Session::put('type',$userById->type);
//
//            if ($userById->type == 1){
//                return redirect('doctors');
//            }
//            elseif($userById->type == 2){
//                return redirect('patients');
//            }
//        }

    }

    public function logOut(){

        Session::flush();

        return redirect('/login');
    }


}
