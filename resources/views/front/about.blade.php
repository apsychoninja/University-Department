@extends('layouts.main')

@section('title')
	About
@endsection

@section('content')

	<?php define('base_url', 'layouts.sections.about.'); ?>

	@include(base_url.'inner-banner')
	@include('layouts.sections.index.welcome')
	@include('layouts.sections.index.course_finder')
	@include('layouts.sections.index.course_progress')
	@include('layouts.sections.about.our-teachers')
	@include(base_url.'latest-event-slider')
	@include('layouts.sections.index.subscribe')
@endsection