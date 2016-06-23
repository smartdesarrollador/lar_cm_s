@extends('layouts/plantilla1')

@section('contenido')
	


@if(!$exito)
	{{ $saludo }}
@else
     <h1>hello</h1>
@endif
<br>
@for($i=0;$i<10;$i++)

numero: {{ $i + 1 }}
<br>

@endfor



@stop