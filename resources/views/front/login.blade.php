@extends('front.master')

@section('title')

    Login

@endsection

@section('content')

    <div class="form-holder">
        <div class="form-content">
            <div class="form-items">
                <h3 class="login-font text-center text-success">Login</h3>
                <hr/>
                <form>
                    <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                    <a href="forget_password.html" class="">forgot password</a>
                    <div class="form-button text-center">
                        <button id="submit" type="submit" class="ibtn">Login</button>
                    </div>
                </form>
                <div class="other-links">
                    <div class="text">Or login with</div>
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>Facebook</a>
                    <a href="https://www.google.com/"><i class="fab fa-google"></i>Google</a>
                    <a href="https://bd.linkedin.com/"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                </div>
                <div class="page-links">
                    <a href="{{ url('/register') }}">Create a new account</a>
                </div>
            </div>
        </div>
    </div>

@endsection
