@extends('admin.template.main')
@section('title', 'Login')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    {!!Form::open(['method' => 'POST', 'route' => 'admin.auth.login'])!!}
                        <div class="form-group">
                            {!!Form::label('email', 'E-mail')!!}
                            {!!Form::email('email', null, ['class' =>'form-control', 'placeholder' => 'E-mail'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('password', 'Contraseña')!!}
                            {!!Form::password('password', ['class' =>'form-control', 'placeholder' => '****'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit('Ingresar', ['class' =>'btn btn-primary'])!!}
                        </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
