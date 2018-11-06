@extends('front.master')

@section('title')
    Forget Password
@endsection

@section('body')
    <div class="form-body without-side">
        <!--<div class="website-logo">-->
        <!--<a href="index.html">-->
        <!--<div class="logo">-->
        <!--<img class="logo-size" src="images/logo-light.svg" alt="">-->
        <!--</div>-->
        <!--</a>-->
        <!--</div>-->
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <!--<img src="images/doctor1.png" alt="" class="img-bg">-->
                    <!--<img src="images/doctor1.png" alt="" class="img-bg2">-->
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <form>
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="New Password" required>
                            <input class="form-control" type="password" name="password" placeholder="Confirm Password" required>
                            <div class="form-button text-center">
                                <button id="submit" type="submit" class="ibtn">Submit</button>
                            </div>
                            <hr/>
                        </form>
                        <div class="page-links">
                            <a href="{{ route('sign-up') }}">Create a new account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
