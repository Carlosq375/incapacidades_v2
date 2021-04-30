<!DOCTYPE html>
<html>
<head>
	<title>Incapacidades V2</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body>
	<!--Logo-->
	<div class="col-12 user-img text-center">
        <img  src="img/logo1.png"/>
    </div>

	<main>
		<!--Cajas de fondo del formulario-->
		<div class="contenedor_todo">
			<div class="caja_trasera">
				<div class="caja_trasera_login">
					<h3>¿Ya tienes cuenta?</h3>
					<p>Inicia sesión para ingresar a la plataforma</p>
					<button id="btn_sesion" > Iniciar sesion </button>
				</div>
				<div class="caja_trasera_registro">
					<h3>¿Aún no tienes cuenta?</h3>
					<p>Registrate para que puedas ingresar a la plataforma</p>
					<button id="btn_registro" >  Registrarse </button>
				</div>
			</div>

			<!--Formulario de login y registro-->
			<div class="contenedor_login_registro">
				<!--Formulario de login-->
				<form action="" class="formulario_login">
					<h2>Iniciar sesión</h2>
					<div class="form-group" id="user-group">
					<input type="text"  placeholder="Nombre de usuario" name="username"/>
					</div>
					<div class="form-group" id="contrasena-group">
					<input type="password"  placeholder="Contrase&ntilde;a" name="password"/>
					</div>
					<button >Ingresar </button>
				</form>
				<!--Formulario de registro-->
				<form action="" class="formulario_registro">
					<h2>Registro</h2>
					<input type="text" placeholder="Nombre Completo" name="username"/>
                    <input type="text" placeholder="Email" name="email"/>
                    <input type="text" placeholder="Empresa" name="empresa"/>
                    <input type="text" placeholder="Nombre de usuario" name="usuario"/>
					<input type="password"  placeholder="Contrase&ntilde;a" name="password"/>
					<button >  Registrarse </button>
				</form>
			</div>
		</div>
	</main>
	<script src="js/script.js"></script>
</body>
</html>	