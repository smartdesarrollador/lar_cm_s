@extends('admin.template')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Informarcion General del Sitio</div>
 
                @if($errors->has())
                    <div class='alert alert-danger'>
                        @foreach ($errors->all('<p>:message</p>') as $message)
                            {!! $message !!}
                        @endforeach
                    </div>
                @endif
 
				@if (Session::has('message'))
				    <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif
 
				<div class="panel-body">
					@if(isset($admin))
	                      {!! Form::model($admin, ['route' => ['admin.general.update', $admin->id], 'method' => 'patch']) !!}
        
                    @endif
 
							<div class="form-group">
							     {!! Form::label('titulo', 'Titulo del Sitio')!!}
								{!! Form::text('titulo', null, ["class" => "form-control"]) !!}
							</div>

							<div class="form-group">
							    {!! Form::label('descripcion', 'Descripcion del Sitio')!!}
								{!! Form::textarea('descripcion', null, ["class" => "form-control"]) !!}
							</div>
 
							<div class="form-group">
							    {!! Form::label('correo', 'Correo')!!}
								{!! Form::text('correo', null, ["class" => "form-control"]) !!}
							</div>

							<div class="form-group">
							    {!! Form::label('url', 'Url del Sitio')!!}
								{!! Form::text('url', null, ["class" => "form-control"]) !!}
							</div>

							
 
							<div class="form-group">
								{!! Form::submit('Guardar', ["class" => "btn btn-success btn-block"]) !!}
							</div>
 
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

	
@stop