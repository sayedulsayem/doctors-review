<?php

namespace App\Http\Controllers;

use App\Patients;
use Illuminate\Http\Request;
use Session;

class ProjectController extends Controller
{
//    public function showProfile(){
//        return view('front.home.profile');
//    }

    public function getUserData(){
        $id=session::get('visitorId');

        $userInfo= Patients::find($id);
        return view('front.home.profile',[
            'userInfo' => $userInfo
        ]);
    }
}
