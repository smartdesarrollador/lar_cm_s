@extends('admin.template')
 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Pagina</div>
 
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
	                      {!! Form::model($admin, ['route' => ['menu.update', $admin->id], 'method' => 'patch']) !!}
                    @else
	                      {!! Form::open(['route' => 'menu.store']) !!}
                    @endif
 
							<div class="form-group">
                                 {!! Form::label('titulo', 'Titulo')!!}
								{!! Form::text('titulo', null, ["class" => "form-control", 'placeholder'=>'Titulo']) !!}
							    
							</div>

							<div class="form-group">
							    {!! Form::label('url', 'Url')!!}
								{!! Form::text('url', null, ["class" => "form-control", 'placeholder'=>'Url']) !!}
							</div>
 
							<div class="form-group">
							    {!! Form::label('descripcion', 'Descripcion')!!}
								{!! Form::textarea('descripcion', null,
										['class'=>'form-control','id'=>'texto-contenido', 'placeholder'=>'Descripcion'])
								!!}
							</div>
                       <div class="form-group">
                            {!! Form::label('template', 'Seleccionar Template')!!}
							{!! Form::select('layout_id', array( 1 => 'template 1', 2 => 'template 2'), 1 ,["class" => "form-control"]) !!} 
 		                  </div>
                        @if(isset($admin))
 		                  {!! Form::hidden('orden_menu', null) !!}
 		                  {!! Form::hidden('orden_submenu', null) !!}
 		                 
 		                  @else
                          {!! Form::hidden('orden_menu', null) !!}
                           
                           <div class="form-group">
								<label for="sel1">Seleccionar Categoria</label>
								<select name="orden_submenu" class="form-control" id="sel1">
									<option value="0" selected>sin categoria</option>

                                      @foreach(Componente::menu_categoria() as $categoria)
                                             <option value="{{$categoria->orden_menu}}">{{$categoria->titulo}}</option>
                                               
                                      @endforeach
				                       
								</select>
								</div>
 		                 
 		                  @endif

								

 		                  <div class="form-group">
 		                    {!! Form::label('menu', 'Seleccionar Menu')!!}
							{!! Form::select('menu_id', array( 1 => 'Menu Principal', 2 => 'Menu Secundario'), 1 ,["class" => "form-control"]) !!} 
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
		{!! Html::link(route('menu.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
       </div>
</div>


@section('script')
<script >
	
	$('#texto-contenido').trumbowyg();
</script>
@endsection


@stop