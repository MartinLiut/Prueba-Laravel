@extends('admin.template.main')

@section('title', 'Categorías')

@section('content')

@include('admin.template.partial.errors')
	<a href="{{ route('categories.create') }}" class="btn btn-default">Nueva categoría</a><br>	
	
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $c) 
					<tr>
						<td>{{ $c->id }}</td>
						<td>{{ $c->name }}</td>
						<td><a href="{{route('categories.edit', $c->id)}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span></a>
						<a href="{{route('admin.categories.destroy', $c->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro quieres eliminarlo?');"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
					</tr>
				@endforeach 
			</tbody>
		</table>
	</div>
	{!! $categories->render() !!}
@endsection