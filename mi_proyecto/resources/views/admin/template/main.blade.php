<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Administration</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
	<section>
		@include('admin.template.partial.nav')
	</section>
	
	<div class="container">
		<div class="panel panel-primary">
		  <div class="panel-heading text-center">@yield('title', 'Default')</div>
		  <div class="panel-body">
		  	<div class="row">
		  		<div class="col-lg-8 col-lg-offset-2">
		  			@include('flash::message')
		  			@yield('content')
		  		</div>
		  	</div>
		  </div>
		</div>
	</div>

	<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>