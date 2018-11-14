<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Session;

class ProjectController extends Controller
{
//    public function showProfile(){
//        return view('front.home.profile');
//    }

    public function getUserData(){
        $id=session::get('visitorId');

        $userInfo= Patient::find($id);
        return view('front.home.profile',[
            'userInfo' => $userInfo
        ]);
    }
}
