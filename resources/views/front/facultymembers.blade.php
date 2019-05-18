@extends('layouts.main')

@section('title')
	Faculty Members
@endsection

@section('content')

	<?php define('base_url', 'layouts.sections.about.'); ?>

	@include(base_url.'inner-banner')
	@include('layouts.sections.facultymembers.ourteachers')
	@include('layouts.sections.about.latest-event-slider')
	@include('layouts.sections.index.subscribe')
	
@endsection