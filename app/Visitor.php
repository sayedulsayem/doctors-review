<?php

namespace App;

use Session;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = ['nid','name','email','address','date','mobile','password'];

    public static function saveVisitorInfo($request){
        $visitor = new Visitor();

        $visitor->nid = $request->nid;
        $visitor->name = $request->name;
        $visitor->email = $request->email;
        $visitor->address = $request->address;
        $visitor->date = $request->date;
        $visitor->mobile = $request->mobile;
        $visitor->password = bcrypt($request->password);
        $visitor->save();

        Session::put('visitorId', $visitor->id);
        Session::put('visitorName', $visitor->name);
        Session::put('visitorNid', $visitor->nid);
        Session::put('visitorEmail', $visitor->email);

    }

    public function showInfoByUser(){

    }
}
