<?php

namespace App\Http\Controllers\Doctors;

use App\Doctor;
use App\Drdegree;
use App\Drschedule;
use App\Drspecility;
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

    public function editProfileView(){
        return view('front.doctors.edit-profile');
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

        return redirect('/doctors/edit-profile')->with('msg','Registration has been successfully.');
    }

    public function editProfileStore(Request $request){

        $doctor=new Doctor();
        $degree=new Drdegree();
        $specility=new Drspecility();
        $schedule=new Drschedule();

        $doctor->user_id=$request->user_id;
        $doctor->nid=$request->nid;
        $doctor->fathers_name=$request->fathers_name;
        $doctor->mothers_name=$request->mothers_name;
        $doctor->date_of_birth=$request->date_of_birth;
        $doctor->dr_main_ol=$request->main_chamber;
        $doctor->field=$request->practise_area;
        $doctor->explanation=$request->practise_area_explanation;
        $doctor->save();

        $degree->user_id=$request->user_id;
        $degree->name=$request->MBBS;
        $degree->license=$request->license;
        $degree->institute=$request->institute;
        $degree->date_of_passing=$request->passing_year;
        $degree->save();

        return 'saved in db';

    }

}
