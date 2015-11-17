<html>
<head>
	<title></title>
</head>
<body>
	Correo : {{$email}} <br>
	Nombre : {{$name}}  <br>
	Asunto : {{$asunto}} <br>
	Mensaje: {{$mensaje}} <br>
	Identificador De Venta : {{$id_venta}} <br>

	<img src="<?php echo $message->embed('C:\xampp\htdocs\web\public\hola.png'); ?>">
</body>
</html>