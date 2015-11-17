<html>
<head>
	<title>M & J Chapoñan </title>
</head>
<body>

	<link rel="stylesheet" type="text/css" href="../estilos/style.css">
  
   <form method = 'post' action='inicio'>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container" >
        <div class="navbar-header" >

           <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">- M & J Chapoñan - </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" >
          <ul class="nav navbar-nav">
            <li ><a href="inicio">Inicio</a></li>
            <li ><a href="somos">Somos</a></li>
            <li ><a href="catalogo">Catálogo</a></li>
            <li ><a href="ubicacion">Ubicación</a></li>
            <li ><a href="contactenos">Contáctenos</a></li>
            @if(!Auth::check())
            <li ><a href="registrarse">Registrarse</a></li>
            @endif
          </ul>
        </div>
      </div>

 

      @if(Auth::check())
      <div align = "right"  >
                  @if( Auth::user()->calidad == "USUARIO" )
                  <strong style="color:white;">Bienvenido {{Auth::user()->name}}</strong>
                   &nbsp&nbsp
                   <input   type = 'submit'  class="btn btn-primary" value='Logout' name='logout'> 

                  <input   type = 'submit'  class="btn btn-primary" value='Detalle Compra' name='detalle'> 
                   <input   type = 'submit'  class="btn btn-primary" value='Enviar Imagen' name='enviar'> 

                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                   @endif

                  @if( Auth::user()->calidad == "ADMINISTRADOR" )
                  <strong style="color:white;">Bienvenido {{Auth::user()->name}}(ADMINISTRADOR)</strong>
                   &nbsp&nbsp
                  <input   type = 'submit'  class="btn btn-primary" value='Validar Pagos' name='validar'>
                  <input   type = 'submit'  class="btn btn-primary" value='Logout' name='logout'> 
                  @endif
      </div>
      @else
      <div align = "right">
                   <label for="pwd">Email :</label>
                   <input    placeholder = 'example@example.com' name='email'>

                   &nbsp&nbsp

                   <label for="pwd">Password :</label>
                   <input   type = 'password'  placeholder = 'Contraseña' name='password'> 

                   &nbsp&nbsp

                    <button type = 'submit' class="btn btn-primary" name='entrar' >Entrar</button>

                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


      </div>
      @endif
    </nav>

  </form>
	

    @yield('content')



</body>
</html>