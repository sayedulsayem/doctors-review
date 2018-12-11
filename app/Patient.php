<?php

namespace App;

use Session;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['nid','name','email','address','date','mobile','password'];

    public static function savePatientInfo($request){

        $patient = new Patient();

        $patient->nid = $request->nid;
        $patient->name = $request->name;
        $patient->email = $request->email;
        $patient->address = $request->address;
        $patient->date = $request->date;
        $patient->mobile = $request->mobile;
        $patient->password = bcrypt($request->password);
        $patient->save();

        Session::start();
        Session::put('visitorId', $patient->id);
        Session::put('visitorName', $patient->name);
        Session::put('visitorNid', $patient->nid);
        Session::put('visitorEmail', $patient->email);

    }

    public function showInfoByUser(){

    }
}
