@extends('pagina.template')

@section('content')

 

<div class="container">
	
	    <!-- columnas 8 4 -->
	    <div class="row">
	      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
	           <table class="table table-bordered table-hover">
					<tr>
					<td><strong>Pagina</strong></td>

					</tr>
					@foreach ($paginas as $pagina)
					<tr>
					<td>{{ $pagina->titulo }}</td>

					</tr>
					<tr>

					<td><?php echo "".($pagina->descripcion)."";  ?></td>
					</tr>

					@endforeach  
              </table>
	      </div>
	      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	          <h1>barra lareral</h1>
	      </div>
	    </div>
	    <!-- /columnas 8 4 -->
		
	
</div>      
@stop