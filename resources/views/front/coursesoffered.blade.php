@extends('layouts.main')

@section('title')
	Courses Offered
@endsection

@section('content')
	@component('layouts.sections.about.inner-banner')@endcomponent
	<div class="course-page-single course-v1" @if(\Request::is('courses-offered')) style="background: #ededed;" @endif>
		@component('layouts.sections.index.course_finder')@endcomponent
		@component('layouts.sections.courses.courses')@endcomponent
		@component('layouts.sections.courses.latest-events')@endcomponent
		@component('layouts.sections.index.subscribe')@endcomponent
	</div>
@endsection