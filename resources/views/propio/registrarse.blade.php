@extends('propio.base')
@section('content')	
	</br></br></br></br></br>
	
	{!! Form::open(array('method' => 'post' )) !!}
	<div class = 'container'>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

			@if( $mensaje == '1')
			<em class="bg-success" style = 'color:green;font-weight:bold;'> Registro Exitoso</em>
			@endif

			<div class="form-group" >
				{!! Form::label ('','Nombre',array('for' => 'pwd')) !!}
				{!! Form::text('name','',array( 'class' => 'form-control' , 'placeholder' => 'Example Example Example')) !!} 
			</div>
			
			<div class="form-group" >
				{!! Form::label('','Email',array('for' => 'pwd'))!!}
				{!! Form::text('email','',array( 'class' => 'form-control' , 'placeholder' => 'Example@Example.com')) !!} 
			</div>
			
			<div class="form-group" >
				{!! Form::label('','Confirmar Email',array('for' => 'pwd'))!!}
				{!! Form::text('emailc','',array( 'class' => 'form-control' , 'placeholder' => 'Example@Example.com')) !!} 
			</div>
			
			<div class="form-group" >
	     		{!! Form::label('','Password',array('for' => 'pwd'))!!}
				<input   type = 'password'  placeholder = 'Contraseña' class= 'form-control' name='password' >
			</div>
	    
	    <div align="center">
	    	{!! Form::submit('Registrarse',array('class' => 'btn btn-primary' )) !!}
	    </div>

	</div>
	
		
	{!! Form::close() !!}

	@stop