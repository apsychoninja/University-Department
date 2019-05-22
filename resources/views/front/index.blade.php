@extends('layouts.main')

@section('title')
	@lang('sentence.home')
@endsection

@section('content')
	<?php define('BASE_URL', 'layouts.sections.index.'); ?>

	@component('layouts.sections.index.banner')@endcomponent
	@component(BASE_URL.'manage_section')@endcomponent

	@component(BASE_URL.'course_finder')@endcomponent
	@component(BASE_URL.'welcome')@endcomponent
	@component(BASE_URL.'popular_course')@endcomponent
	@component(BASE_URL.'course_progress')@endcomponent
	@component(BASE_URL.'events')@endcomponent
	@component(BASE_URL.'information-parallax')@endcomponent
	@component(BASE_URL.'latest-news')@endcomponent
	@component(BASE_URL.'test-faq')@endcomponent
	@component(BASE_URL.'subscribe')@endcomponent
	
@endsection
