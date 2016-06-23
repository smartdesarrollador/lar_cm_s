@extends('admin.template')
 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
 
                @if($errors->has())
                    <div class='alert alert-danger'>
                        @foreach ($errors->all('<p>:message</p>') as $message)
                            {!! $message !!}
                        @endforeach
                    </div>
                @endif
 
				@if (Session::has('mensaje'))
				    <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
				@endif
 
				<div class="panel-body">
					@if(isset($admin))
	                      {!! Form::model($admin, ['route' => ['banner.update', $admin->id], 'method' => 'patch','files' => true]) !!}
                    @else
	                      {!! Form::open(array('url' => 'banner/store', 'method' => 'post', 'files' => true)) !!}
                    @endif
 
							<div class="form-group">
							    {!! Form::label('titulo', 'Titulo')!!}
								{!! Form::text('titulo', null, ["class" => "form-control", 'placeholder'=>'Titulo']) !!}
							</div>
 
							<div class="form-group">
							    {!! Form::label('descripcion', 'Descripcion')!!}
								{!! Form::textarea('descripcion', null,
										['class'=>'form-control','id'=>'texto-contenido', 'placeholder'=>'Descripcion'])
								!!}
							</div>
							@if(isset($admin))
							<br>

                             <div>
                             	<img src="{!!asset('uploads/'.$admin->imagen.'')!!}"  width="200" height="100">
                             </div>
                             <br>

                             {!! Form::hidden('imagen_banner', $admin->imagen) !!}
                             @endif
							<div class="form-group">
                            {!! Form::label('imagen', 'Archivo - Dimensiones adecuadas:1200px - 400px') !!}<br>
                            <span class="btn btn-primary btn-file">
                               Select a file {!! Form::file('imagen') !!}
                            </span>
                           </div>
                          
                          

							<div class="form-group">
							    {!! Form::label('url', 'Url')!!}
								{!! Form::text('url', null, ["class" => "form-control"]) !!}
							</div>

							<div class="form-group">
							    {!! Form::label('ancho', 'Width')!!}
								{!! Form::number('ancho', null, ["class" => "form-control"]) !!}
							</div>

							<div class="form-group">
							    {!! Form::label('altura', 'Height')!!}
								{!! Form::number('altura', null, ["class" => "form-control"]) !!}
							</div>

							<div class="form-group">
							     {!! Form::label('formato', 'Formato')!!}
								{!! Form::text('formato', null, ["class" => "form-control"]) !!}
							</div>
 
							<div class="form-group">
								{!! Form::submit('Guardar', ["class" => "btn btn-success btn-block"]) !!}
							</div>
 
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

	<div class="row">
	<div class="col-md-3 pull-right">
		{!! Html::link(route('banner.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
       </div>
</div>
@stop

