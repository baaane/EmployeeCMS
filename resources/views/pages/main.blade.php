@extends('layout.mainlayout')
@section('content')
	<div class="container" id="wrap">
		<div class="album text-muted">
			<section class="personal">@include('pages.personal.info')</section>
			<section class="todo">@include('pages.etc.todo')</section>
			<section class="image-upload">@include('pages.etc.upload')</section>
		</div>
	</div>
@endsection