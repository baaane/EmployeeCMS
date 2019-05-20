@extends('layout.mainlayout')
@section('content')
	<div class="container">
		<div class="album text-muted">
			<section class="personal">@include('pages.personal.info')</section>
			<section class="todo">@include('pages.etc.todo')</section>
		</div>
	</div>
@endsection