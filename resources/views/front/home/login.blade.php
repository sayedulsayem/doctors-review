@extends('front.master')

@section('title')
    Login
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
                    <!--<img src="images/doctor2.jpg" alt="" class="img-bg">-->
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h4 class="text-center text-danger">{{ Session::get('message') }}</h4>
                        <h3 class="login-font text-center text-success">Login</h3>
                        <hr/>
                        <form action="{{ route('visitor-sign-in') }}" method="POST">
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <a href="{{ route('forget-password') }}" class="">forgot password</a>
                            <div class="form-button text-center">
                                <button id="submit" type="submit" class="btn btn-success" value="Login">Login</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <div class="text">Or login with</div>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>Facebook</a>
                            <a href="https://www.google.com/"><i class="fab fa-google"></i>Google</a>
                            <a href="https://bd.linkedin.com/"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                        </div>
                        <div class="page-links">
                            <a href="{{ route('sign-up') }}">Create a new account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

