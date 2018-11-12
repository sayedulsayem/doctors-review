<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/iofrm-theme19.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/style.css">
</head>
<body>

@yield('body')

<script src="{{ asset('/') }}front/assets/js/jquery.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/popper.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}front/assets/js/main.js"></script>
</body>
</html>