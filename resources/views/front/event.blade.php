@extends('layouts.main')

@section('title')
	Recent Events
@endsection

@section('content')
	@include('layouts.sections.about.inner-banner')
	@include('layouts.sections.recent-events.recent-events')
	@include('layouts.sections.index.subscribe')
@endsection
