<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fonts -->

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>

	@yield('javascript')
</body>
</html>