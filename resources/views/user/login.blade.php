@extends('layouts.master')
@section('title')
Daftar
@endsection
@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Masuk</h1>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
			@endif
			<form action="{{ url('/user/login') }}" method="post">
			{!! csrf_field() !!}
				<div class="form-group">
					<label for="email">E-Mail</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>
			  <div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<button class="btn btn-primary">Masuk</button>

	@endsection
