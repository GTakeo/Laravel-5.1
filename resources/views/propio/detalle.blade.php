@extends('propio.base')
@section('content')	
	</br></br></br></br></br>
	
  @if($detalles!=null)
  <h1 align = "center">Detalle De Último Pedido</h1> <br>
	<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Id Venta</th>
          <th>Id Producto</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Cantidad</th>
        </tr>
      </thead>
      <tbody>
      	<?php $x=1;?>
        
        	@foreach($detalles as $detalle)

          <tr>

            <th scope="row">{{$x}}</th>
            <td>{{ $detalle->id_venta }}</td>
            <td>{{ $detalle->id_producto }} </td>
            <td>{{ $productos[$x]->nombre }} </td>
            <td>{{ $productos[$x]->descripcion }} </td>
            <td>{{ $detalle->cantidad }}</td>

          </tr>
          
          <?php $x++;?>
         @endforeach	




      </tbody>
    </table>
  @else
  <h1 align = "center">Usted no tiene nuevo pedido realizado.</h1> <br>
  @endif
	

@stop