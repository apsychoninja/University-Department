@extends('layouts.main')

@section('title')
	Contact us
@endsection

@section('content')

	<?php define('base_url', 'layouts.sections.about.'); ?>
	@include(base_url.'inner-banner')
	@include('layouts.sections.contact.contact')
	<!-- Google Map -->
			<div id="google-map" style="height:460px; width:100%; margin-top:100px;"></div>


	@include('layouts.sections.index.subscribe')
@endsection