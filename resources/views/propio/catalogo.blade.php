@extends('propio.base')
@section('content')

	</br></br></br></br></br>

	<style>
		img{
			padding: 0.5em;
		}

		h3{
			height: 50px;
		}

		#descp{
			height: 80px;
		}
	</style>

	
	

	<div class="container" >
		<div class="jumbotron">
			<h1> Catálogo de Muebles </h1>
			<p>Elige el diseño que más te guste y pidelo!</p>
		</div>

		<div class="row">

			<h2>Cocina</h2>
			<hr height="10px" background-color="red" >
			
				@foreach($productos as $producto)
					@if($producto->categoria == '1')
					<form method = 'post' >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id_producto" value="{{$producto->id}}">

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<span class="badge">{{ $producto->precio }}</span>
								<img src="img/Cocina/{{$producto->imagen}}.jpg" alt="..." class="img-responsive" >
								<div class="caption">
									<h3>{{$producto->nombre}}</h3>
									<p id="descp">
										{{$producto->descripcion}}
									</p>
									<p>
										<a class="btn btn-primary" href="#" role="button">Detalles</a>
										@if(Auth::check())
										<button type = 'submit' class="btn btn-default" name='agregar' >Agregar</button>
	     								 @endif
										
									</p>
								</div>
							</div>
						</div>
					</form>
					@endif
				@endforeach			
			

			<h2>Habitación</h2>
			<hr height="10px" background-color="red" >
			
				@foreach($productos as $producto)
					@if($producto->categoria == '2')
					<form method = 'post' >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id_producto" value="{{$producto->id}}">

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<span class="badge">{{ $producto->precio }}</span>
							<img src="img/Habitacion/{{$producto->imagen}}.jpg" alt="..." class="img-responsive" >
							<div class="caption">
								<h3>{{$producto->nombre}}</h3>
								<p id="descp">
									{{$producto->descripcion}}
								</p>
								<p>
									<a class="btn btn-primary" href="#" role="button">Detalles</a>
									@if(Auth::check())
									<button type = 'submit' class="btn btn-default" name='agregar' >Agregar</button>
      								@endif
									
								</p>
							</div>
						</div>
					</div>
					</form>
					@endif
				@endforeach
			

			<h2> Stands</h2>
			<hr height="10px" background-color="red" >
	
				@foreach($productos as $producto)
					@if($producto->categoria == '3')
					<form method = 'post' >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id_producto" value="{{$producto->id}}">
						
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<span class="badge">{{ $producto->precio }}</span>
								<img src="img/Stands/{{$producto->imagen}}.jpg" alt="..." class="img-responsive" >
								<div class="caption">
									<h3>{{$producto->nombre}}</h3>
									<p id="descp">
										{{$producto->descripcion}}
									</p>
									<p>
										<a class="btn btn-primary" href="#" role="button">Detalles</a>
										@if(Auth::check())
										<button type = 'submit' class="btn btn-default" name='agregar' >Agregar</button>
	     								 @endif
										
									</p>
								</div>
							</div>
						</div>
					</form>
					@endif
				@endforeach
		
			
		</div>
	</div>


@stop