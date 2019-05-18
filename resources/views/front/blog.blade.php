@extends('layouts.main')

@section('title')
	Our Blog
@endsection

@section('content')

	<?php define('base_url', 'layouts.sections.about.'); ?>

	@include(base_url.'inner-banner')
	@include('layouts.sections.blog.blog')
	@include('layouts.sections.index.subscribe')
@endsection