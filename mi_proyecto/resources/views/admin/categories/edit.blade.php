@extends('admin.template.main')

@section('title', 'Editar categoría')

@section('content')

@include('admin.template.partial.errors')
	{!!Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT'])!!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre de la categoría') !!}
			{!! Form::text('name', null, ['required', 'class' => 'form-control', 'placeholder' => 'Nombre']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
		</div>
	{!!Form::close()!!}
@endsection