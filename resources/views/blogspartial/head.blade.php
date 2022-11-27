<head>
	<meta charset="utf-8">
	<title>
		{{env('APP_NAME')}} | Welcome
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