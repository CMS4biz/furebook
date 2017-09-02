<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Furbook</title>
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				@yield('header')
			</div>
			@if (Session::has('succes'))
				<div class="alert alert-succes">
				{{Session::get('succes')}}
				</div>
			@endif
			@yield('content')
		</div>
	</body>
</html>