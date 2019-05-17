@extends('layouts.main')

@section('title')
	Home
@endsection

@section('content')

	<?php define('BASE_URL', 'layouts.sections.index.'); ?>

	@include(BASE_URL.'banner')
	@include(BASE_URL.'manage_section')
	@include(BASE_URL.'course_finder')
	@include(BASE_URL.'welcome')
	@include(BASE_URL.'popular_course')
	@include(BASE_URL.'course_progress')
	@include(BASE_URL.'events')
	@include(BASE_URL.'information-parallax')
	@include(BASE_URL.'latest-news')
	@include(BASE_URL.'test-faq')
	@include(BASE_URL.'subscribe')
	
@endsection
