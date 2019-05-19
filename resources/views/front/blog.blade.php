@extends('layouts.main')

@section('title')
	Our Blog
@endsection

@section('content')

	<?php define('base_url', 'layouts.sections.about.'); ?>

	@component(base_url.'inner-banner')@endcomponent
	@component('layouts.sections.blog.blog')@endcomponent
	@component('layouts.sections.index.subscribe')@endcomponent
@endsection