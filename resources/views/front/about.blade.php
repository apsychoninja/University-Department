@extends('layouts.main')

@section('title')
	About
@endsection

@section('content')

	<?php define('base_url', 'layouts.sections.about.'); ?>

	@component(base_url.'inner-banner')@endcomponent
	@component('layouts.sections.index.welcome')@endcomponent
	@component('layouts.sections.index.course_finder')@endcomponent
	@component('layouts.sections.index.course_progress')@endcomponent
	@component(base_url.'our-teachers')@endcomponent
	@component(base_url.'latest-event-slider')@endcomponent
	@component('layouts.sections.index.subscribe')@endcomponent


@endsection