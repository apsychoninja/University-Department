@extends('layouts.main')

@section('title')
	Courses Offered
@endsection

@section('content')
	@include('layouts.sections.about.inner-banner')
	<div class="course-page-single course-v1" @if(\Request::is('courses-offered'))
			style="background: #ededed;" @endif>
		@include('layouts.sections.index.course_finder')
		@include('layouts.sections.courses.courses')
		@include('layouts.sections.courses.latest-events')
		@include('layouts.sections.index.subscribe')
	</div>
@endsection