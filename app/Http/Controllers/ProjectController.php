<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Session;

class ProjectController extends Controller
{
//    public function showProfile(){
//        return view('front.home.profile');
//    }

    public function getUserData(){
        $id=session::get('visitorId');

        $userInfo= Visitor::find($id);
        return view('front.home.profile',[
            'userInfo' => $userInfo
        ]);
    }
}
