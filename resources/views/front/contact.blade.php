@extends('layouts.main')

@section('title')
	Contact us
@endsection

@section('content')

	<?php define('base_url', 'layouts.sections.about.'); ?>
	@component(base_url.'inner-banner')@endcomponent
	@component('layouts.sections.contact.contact')@endcomponent
	<!-- Google Map -->
			<div id="google-map" style="height:460px; width:100%; margin-top:100px;"></div>


	@component('layouts.sections.index.subscribe')@endcomponent
@endsection