<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Doctors Review</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 50px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Doctors Review
        </div>

        <div class="links">
            <a href="{{ url('/') }}">home</a>
            <a href="{{ url('/patients') }}">patients</a>
            <a href="{{ url('/doctors') }}">doctors</a>
            <a href="{{ url('/sign-up') }}">sign up</a>
            <a href="{{ url('/login') }}">login</a>
            <div class="w3-dropdown-click">
                <button onclick="myFunction()" class="w3-button">Profile</button>
                <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
                    <a href="#" class="w3-bar-item w3-button">dashboard</a>
                    <a href="{{ url('/visitor-logout') }}" class="w3-bar-item w3-button">logout</a>
                </div>
            </div>
        </div>
        <h1>This is homepage under construction</h1>
    </div>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("Demo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
</body>
</html>
