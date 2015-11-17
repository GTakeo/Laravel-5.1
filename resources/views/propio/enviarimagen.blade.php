@extends('propio.base')
@section('content')	
	</br></br></br></br></br>
	{!! Form::open(array('method' => 'post' ,'files' => true)) !!}
	<div class = 'container'>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		<div class = "form-group">
			<p class="lead">Ahora {{Auth::user()->name}} <br> Solo debes adjuntar la imagen, añadir un mensaje(opcional) y esperar la respuesta
			</p>	
		</div>

		<div class = "form-group">
		
                {!! Form::label('foto', 'Foto') !!}
                {!! Form::file('foto') !!}

		</div>

		<div class = "form-group">
			{!! Form::label('','Mensaje',array()) !!}
			{!! Form::textarea('mensaje','',array('class' => 'form-control' , 'placeholder' => 'Example Example Example'))!!}

		</div>

		<div align="center">
	    	{!! Form::submit('Enviar',array('class' => 'btn btn-primary' )) !!}
	    </div>

	</div>

	{!! Form::close() !!}

@stop