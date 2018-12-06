<?php

namespace App\Http\Controllers\Patients;

use App\Patient;
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

    public function editProfileStore(Request $request){

        //return $request;

        $patient= new Patient();

        $patient->user_id=$request->user_id;
        $patient->nid=$request->nid;
        $patient->date_of_birth=$request->date_of_birth;
        $patient->mobile=$request->mobile;
        $patient->house_no=$request->house_number;
        $patient->road=$request->road;
        $patient->sub_dist=$request->sub_dist;
        $patient->dist=$request->dist;
        $patient->zip_code=$request->zip_code;
        $patient->save();

        return "stored in db";

    }


}
