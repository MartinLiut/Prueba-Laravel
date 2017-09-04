@extends('admin.template.main')

@section('title', 'Crear usuario')

@section('content')

@include('admin.template.partial.errors')

	{!! Form::open(['method' => 'POST', 'route' => 'users.store']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'ejemplo@gmail.com']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => 'Contraseña']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection