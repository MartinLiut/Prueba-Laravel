@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
	<a href="{{ route('users.create') }}" class="btn btn-default">Nuevo usuario</a><br>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>E-mail</th>
					<th>Tipo</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user) 
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							@if($user->type == 'admin')
								<span class="label label-danger">{{ $user->type }}</span>
							@else
								<span class="label label-primary">{{ $user->type }}</span>
							@endif
						</td>
						<td><a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span></a>
						<a href="{{route('admin.users.destroy', $user->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro quieres eliminarlo?');"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
					</tr>
				@endforeach 
			</tbody>
		</table>
	</div>
	<div class="text-center">
		{!! $users->render() !!}
	</div>

@endsection