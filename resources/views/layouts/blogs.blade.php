<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        {{env('COMPANY_NAME')}} | {{ $pagedata['controller'] ?? config('app.name', 'Application') }}
    </title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('css/vendors.bundle.css') }}">
    <!-- Favicons -->
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo.png') }}">

    <!-- Nucleo Icons -->
    <link href="{{ asset('css/materialkit/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/materialkit/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link id="pagestyle" href="{{ asset('css/materialkit/material-kit.css') }}" rel="stylesheet" />

    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-light.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-regular.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-solid.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/fa-brands.css') }}">
    <style>
        .navbar-nav li.active>a {
            color: #e91e63;
            font-weight: 800;
        }
    </style>
    @yield('style')
</head>
<!--
		ditambahkan class fixed footer "footer-function-fixed"
		pada body class sebagai default layout antisipasi
		saat tampil di android webview
	-->

<body class="index-page bg-gray-200">
    @include('blogs.navbar')
    @yield('content')
    @include('blogs.footer')
    <!--   Core JS Files   -->
    <script src="{{asset('js/materialkit/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/materialkit/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/materialkit/plugins/perfect-scrollbar.min.js')}}"></script>

    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="{{asset('js/materialkit/plugins/countup.min.js')}}"></script>
    <script src="{{asset('js/materialkit/plugins/choices.min.js')}}"></script>
    <script src="{{asset('js/materialkit/plugins/prism.min.js')}}"></script>
    <script src="{{asset('js/materialkit/plugins/highlight.min.js')}}"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="{{asset('js/materialkit/plugins/rellax.min.js')}}"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="{{asset('js/materialkit/plugins/tilt.min.js')}}"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="{{asset('js/materialkit/plugins/choices.min.js')}}"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="{{asset('js/materialkit/plugins/parallax.min.js')}}"></script>

    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="{{asset('js/materialkit/material-kit.min.js')}}" type="text/javascript"></script>
    @yield('scripts')
</body>

</html>