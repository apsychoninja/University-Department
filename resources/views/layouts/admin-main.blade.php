<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Responsive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Admin Panel') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/AdminLTE.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/_all-skins.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-jvectormap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>	     
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		@component('layouts/sections/layout/admin/header')@endcomponent

		<!-- sidebar for admin panel -->
		@component('layouts/sections/layout/admin/sidebar')@endcomponent
		<!-- /sidebar for admin panel -->

		<!-- Content Wrapper. Contains page content -->
  		<div class="content-wrapper">
    		<!-- Content Header (Page header) -->
    		@component('layouts/sections/layout/admin/content_header')@endcomponent
    		<!-- Main content -->
			@yield('content')


			<!-- /Main Content -->
		</div>
		<!-- /.content Wrapper -->
	<footer class="main-footer">
	    <div class="pull-right hidden-xs">
	      <b>Version</b> 1.0.0
	    </div>
	    <strong>Copyright &copy; 2019 <a href="https://zfhassaan.blogspot.com">zfhassaan</a>.</strong> All rights
	    reserved.
	</footer>

	<!-- /.control-sidebar -->
	<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
  	</div>
	@component('layouts/sections/layout/admin/scripts')@endcomponent

	
</body>
</html>