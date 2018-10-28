<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/') }}/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/') }}/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/') }}/css/iofrm-theme19.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/') }}/css/style.css">
</head>
<body>
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
        @yield('content')
    </div>
</div>
<script src="{{ asset('/front/') }}/js/jquery.min.js"></script>
<script src="{{ asset('/front/') }}/js/popper.min.js"></script>
<script src="{{ asset('/front/') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('/front/') }}/js/main.js"></script>
</body>
</html>