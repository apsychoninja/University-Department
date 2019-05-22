<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Responsive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/icon.png') }}">

    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/time-picker/jquery.timepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/WOW-master/css/lib/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/icon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/lato-semibold/stylesheet.css') }}">
    <link rel="stylesheet" href="src/css/ideabox-news-ticker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <!-- responsive  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">



    <!-- Fix Internet Explorer _________________________ -->
    <!-- [if lt IE 9]>
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    	<script src="vendor/html5shiv.js"></script>
    	<script src="vendor/respond.js"></script>
	<![endif]-->
</head>
<body>
    
	<div class="main-page-wrapper {{ (\Request::is('about')) ? "about-us-v1-page" : "" }}">
		@include('layouts/sections/layout/header')
		@yield('content')
	</div>

        @include('layouts/sections/layout/footer')
        <!-- Scroll Top Button -->
            <button class="scroll-top tran3s p-color-bg">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </button>
            <!-- pre loader  -->
            <div id="loader-wrapper">
                <div id="loader"></div>
            </div>

		@include('layouts/sections/layout/javascripts')
</body>
</html>