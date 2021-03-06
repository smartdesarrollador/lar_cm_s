@extends('admin.template')
 
@section('content')

<div class="col-md-12">
  


  @if (Session::has('message'))
          <div class="alert alert-success">{{ Session::get('message') }}</div>
  @endif


        @if(!$administrador->isEmpty()) 
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

    

      @if(!$administrador->isEmpty())

         <h1>Categorias</h1>

          <table class="table table-bordered">
              <tr>
                <th>Título</th>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Eliminar</th>

              </tr>
              @foreach ($administrador as $post)
                  <tr>
                    <td width="500">{{ $post->titulo }}</td>
                    <td width="500"><?php echo "".($post->descripcion)."";  ?></td>
                    <td width="60" align="center">
                      {!! Html::link(route('categoria.edit', $post->id), 'Edit', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('categoria.destroy', $post->id), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Delete</button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
              @endforeach
          </table>
          <?php echo $administrador->render(); ?>
      @endif
		</div>
	</div>

  <div class="row">
  <div class="col-md-3 pull-right">
    {!! Html::link(route('categoria.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
       </div>
</div>
@endif
</div>

@endsection