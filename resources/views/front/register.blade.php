@extends('front.master')

@section('title')

    Register

@endsection

@section('content')

    <div class="form-holder">
        <div class="form-content">
            <div class="form-items">
                <h3 class="login-font text-center text-success">Registration</h3>
                <hr/>
                <form>
                    <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                    <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                    <input class="form-control" type="text" name="address" placeholder="Address" >
                    <input class="form-control" type="date" name="date" placeholder="Date of birth" required>
                    <input class="form-control" type="number" name="mobile" placeholder="Mobile Number" required>
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                    <div class="form-button text-center">
                        <button id="submit" type="submit" class="ibtn">Register</button>
                    </div>
                </form>
                <div class="other-links">
                    <div class="text">Or register with</div>
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>Facebook</a>
                    <a href="https://www.google.com/"><i class="fab fa-google"></i>Google</a>
                    <a href="https://bd.linkedin.com/"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                </div>
                <div class="page-links">
                    <a href="{{ url('/') }}">Login to account</a>
                </div>
            </div>
        </div>
    </div>

@endsection

