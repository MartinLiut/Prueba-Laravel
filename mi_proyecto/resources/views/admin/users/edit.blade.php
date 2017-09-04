@extends('admin.template.main')

@section('title', 'Editiar usuario '. $user->name)

@section('content')
	
	{!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update', $user->id]]) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', $user->email, ['class' => 'form-control', 'required', 'placeholder' => 'ejemplo@gmail.com']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection