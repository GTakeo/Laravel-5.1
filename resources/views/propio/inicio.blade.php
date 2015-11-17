@extends('propio.base')
@section('content')	
	</br></br></br></br></br>

	<link rel="stylesheet" type="text/css" href="css/JWslider.css" />
 
 	

	<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.JWslider.js" ></script>
	<script type="text/javascript" src="js/cufon-yui.js" ></script>
	<script type="text/javascript" src="js/Quicksand_Book_400.font.js" ></script>

	

	<script type="text/javascript">
		Cufon.replace('h2 ,h4');

		$(function(){
			 $("#wrapper").css({height:"auto" , overflow:"visible"});
			 $("#test").JWslider();
			  });

	</script>

	<link rel="stylesheet" type="text/css" href="../estilos/style.css">

	
	<div class="container">
		<div class="wrapper">
 			<ul id="test">
				<li><img src="img/im1.jpg"  /><span> </span></li>
				<li><img src="img/im2.jpg"  /><span> </span></li>
				<li><img src="img/im3.jpg"  /><span> </span></li>
				<li><img src="img/im4.jpg"  /><span> </span></li>
				<li><img src="img/im5.jpg"  /><span> </span></li>
				<li><img src="img/im6.jpg"  /><span> </span></li>
			</ul>
		</div>
		
		<img src='css/i/reflection.jpg' class='reflect' />
		

		<h1 align = "center">Bienvenidos a M & J Chapoñan</h1>
		<p class="text-center lead">
				Somos una empresa que brinda el servicio de diseño, fabricación e instalación de muebles de melamina.
				Trabajamos ya hace más de doce años brindando nuestros servicios a distintos lugares de la capital, incluso 
				algunos laborores ya a provincia, complacemos al cliente brindadole la mejor atención ante cualquier consulta 
				o duda acerca de nuestro trabajo, laboramos conforme al cliente lo desee ya que nuestra finalidad es mantener 
				a nuestra clientela feliz.
		</p>	
				
	</div>


@stop