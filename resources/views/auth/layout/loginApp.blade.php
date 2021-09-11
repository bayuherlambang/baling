<!DOCTYPE html>
<html>

<head lang="{{ app()->getLocale() }}">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=0,8, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Baling</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('image/icon.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="{{asset('webfonts/css.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('webfonts/icon.css')}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <!-- <link href="{{asset('page_assets/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet"> -->
    <!-- Waves Effect Css -->
    <link href="{{asset('page_assets/plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{asset('page_assets/plugins/animate-css/animate.css')}}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{asset('page_assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    @yield('content')
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <!-- Jquery Core Js -->
    <script src="{{asset('page_assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{asset('page_assets/plugins/bootstrap/js/bootstrap.js')}}"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('page_assets/plugins/node-waves/waves.js')}}"></script>
    <!-- Validation Plugin Js -->
    <script src="{{asset('page_assets/plugins/jquery-validation/jquery.validate.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('page_assets/js/admin.js')}}"></script>
    <script src="{{asset('page_assets/js/pages/examples/sign-in.js')}}"></script>
    <style>
    .input-group .input-group-addon .material-icons {
    font-size: 14px;
    color: #555;
    }
    </style>
</body>
</html>
