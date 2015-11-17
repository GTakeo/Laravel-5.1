@extends('propio.base')
@section('content')	
	</br></br></br></br></br>
	{!! Form::open(array('method' => 'post' )) !!}
	<div class = 'container'>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		<div class = "form-group">
			{!! Form::label('','Nombre',array()) !!}
			{!! Form::text('name','',array('class' => 'form-control' , 'placeholder' => 'Example Example Example'))!!}
		</div>

		<div class = "form-group">
			{!! Form::label('','Email',array()) !!}
			{!! Form::text('email','',array('class' => 'form-control' , 'placeholder' => 'Example@Example'))!!}

		</div>

		<div class = "form-group">
			{!! Form::label('','Asunto',array()) !!}
			{!! Form::text('asunto','',array('class' => 'form-control' , 'placeholder' => 'Example Example Example'))!!}

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