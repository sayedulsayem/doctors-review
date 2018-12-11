@extends('front.master')

@section('title')

    Login

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
                        <h3 class="login-font text-center text-success">Login</h3>
                        <h4 class="text-danger text-center">{{ Session::get('msg') }}</h4>
                        <hr/>
                        <form action="{{ url('login-verify') }}" method="post">
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <a href="forget_password.html" class="">forgot password</a>
                            <div class="form-button text-center">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>

                        <div class="page-links">
                            <a href="{{ url('/sign-up') }}">Create a new account</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>>
    </div>>


@endsection
