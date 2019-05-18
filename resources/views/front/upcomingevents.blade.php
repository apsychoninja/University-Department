@extends('layouts.main')

@section('title')
	Upcoming Events
@endsection

@section('content')
	@include('layouts.sections.about.inner-banner')
	@include('layouts.sections.recent-events.recent-events')
	@include('layouts.sections.index.subscribe')
@endsection
