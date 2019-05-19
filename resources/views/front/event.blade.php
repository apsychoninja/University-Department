@extends('layouts.main')

@section('title')
	Recent Events
@endsection

@section('content')
	@component('layouts.sections.about.inner-banner')@endcomponent
	@component('layouts.sections.recent-events.recent-events')@endcomponent
	@component('layouts.sections.index.subscribe')@endcomponent
@endsection
