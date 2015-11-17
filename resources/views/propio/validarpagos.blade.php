@extends('propio.base')
@section('content')	
	</br></br></br></br></br>
@if($ventas!=null)
	 <h1 align = "center">Detalle De Ventas Sin Pagar</h1> <br>
	<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Id Venta</th>
          <th>Id Cliente</th>
          <th>Nombre</th>
          <th>Confirmar</th>
        </tr>
      </thead>
      <tbody>
      	<?php $x=1;?>
        
        	@foreach($ventas as $venta)
        	<form method = 'post' >
	          <tr>
	          	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	          	<input type="hidden" name="id_venta" value="{{$venta->id}}">

	            <th scope="row">{{$x}}</th>

	            <td>{{ $venta->id }}</td>
	            <td>{{ $venta->id_cliente }} </td>
	            <td>{{ $clientes[$x]->name }} </td>
	            <td><button type = 'submit' class="btn btn-primary" name='agregar' >Validar</button></td>

	          </tr>
          	</form>
          <?php $x++;?>
         @endforeach	
@else
<h1 align = "center">Usted Ninguna Validadcion A Realizar.</h1> <br>
  @endif




      </tbody>
    </table>
@stop