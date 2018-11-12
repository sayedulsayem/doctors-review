@extends('front.master')

@section('title')
    Register
@endsection

@section('body')
    <div class="form-body without-side">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="login-font text-center text-success">Registration</h3>
                        <hr/>
                        <form action="{{ route('new-visitor') }}" method="POST">
                            @csrf
                            <input class="form-control" type="number" name="nid" placeholder="NID" required>
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="text" name="address" placeholder="Address" >
                            <input class="form-control" type="date" name="date" placeholder="Date of birth" required>
                            <input class="form-control" type="number" name="mobile" placeholder="Mobile Number" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button text-center">
                                <button id="submit" type="submit" class="btn bg-success" value="Register">Register</button>
                            </div>
                        </form>

                        <div class="page-links">
                            <a href="{{ url('/login') }}">Login to account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
