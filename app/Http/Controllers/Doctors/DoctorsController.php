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

        //return $request;

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

        if (isset($request->MBBS)){
            $degree=new Drdegree();
            $degree->user_id=$request->user_id;
            $degree->name=$request->MBBS;
            $degree->license=$request->license;
            $degree->institute=$request->institute;
            $degree->year_of_passing=$request->passing_year;
            $degree->save();
        }

        if (isset($request->BMBS)){
            $degree=new Drdegree();
            $degree->user_id=$request->user_id;
            $degree->name=$request->BMBS;
            $degree->institute=$request->BMBS_institute;
            $degree->year_of_passing=$request->BMBS_passing_year;
            $degree->save();
        }

        if (isset($request->MBChB)){
            $degree->user_id=$request->user_id;
            $degree->name=$request->MBChB;
            $degree->institute=$request->MBChB_institute;
            $degree->year_of_passing=$request->MBChB_passing_year;
            $degree->save();
        }

        if (isset($request->MBBCh)){
            $degree=new Drdegree();
            $degree->user_id=$request->user_id;
            $degree->name=$request->MBBCh;
            $degree->institute=$request->MBBCh_institute;
            $degree->year_of_passing=$request->MBBCh_passing_year;
            $degree->save();
        }

        $specility->user_id=$request->user_id;
        $specility->name=$request->speciality;
        $specility->explanation=$request->sp_explanation;
        $specility->save();

//        $schedule->user_id=$request->user_id;
//        $schedule->chamber=$request->private_chamber;
//        $schedule->available_schedule_d=$request->private_schedules_date;
//        $schedule->available_schedule_t=$request->private_schedules_time;
//        $schedule->save();


        return redirect('/doctors')->with('msg','Your information has been updated.');

    }

}
