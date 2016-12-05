<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap-theme.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/index.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/font-awesome.min.css') }}">
</head>
<body>
	@include('partials.header')
	<div class="container">
	@yield('content')
	</div>
	<script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/npm.js') }}"></script>
	@yield('script')
</body>
</html>