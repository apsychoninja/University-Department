@extends('layouts.main')

@section('title')
	Faculty Members
@endsection

@section('content')

	<?php define('base_url', 'layouts.sections.about.'); ?>

	@component(base_url.'inner-banner')@endcomponent
	@component('layouts.sections.facultymembers.ourteachers')@endcomponent
	@component('layouts.sections.about.latest-event-slider')@endcomponent
	@component('layouts.sections.index.subscribe')@endcomponent
	
@endsection