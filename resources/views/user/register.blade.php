@extends('layouts.master')
@section('title')
Daftar
@endsection
@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Daftar</h1>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
			@endif
			<form action="{{ url('/register') }}" method="post">
			{!! csrf_field() !!}
				<div class="form-group">
					<label for="email">E-Mail</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="username">Nama Lengkap</label>
					<input type="text" name="name" id="email" class="form-control">
				</div>
				{{-- <div class="form-group">
          <label>No.Telepon</label>
          <div class="input-group">
            <div class="input-group-addon">
            	+62
            </div>
            <input type="text" class="form-control" name="telepon" id="phone">
          </div>
                <!-- /.input group -->
        </div> --}}
				<div class="form-group">
					<label for="email">Alamat</label>
					<textarea type="text" name="alamat" class="form-control"></textarea>

				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Konfirmasi Password</label>
					<input type="password" name="password_confirm" id="password" class="form-control">
				</div>
				<button class="btn btn-primary">Daftar</button>
			</form>
		</div>
	</div>
	@section('script')
	<script type="text/javascript">
		$("#phone").mask("(999) 999-9999");
	</script>
	@endsection
@endsection
