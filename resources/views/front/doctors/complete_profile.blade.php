@extends('front.doctors.master')
@section('body')
    <div class="content-wraper">
        <h4 class="text-success text-center">{{ Session::get('msg') }}</h4>
        <section class="content-header">
            <h1>
                Dashboard
                <small>Version 2.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

    </div>
    @endsection