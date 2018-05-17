<?php
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca Virtual</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\styles\styles.css">
</head>
<body>
<header>
	<?php include ("../header.php") ?>
</header>


	<div class="w3-container w3-green">
		<h2>Login</h2>
	</div>

	<form class="w3-container" action="controller_login.php" method="post">
		<p>
			<label class="w3-label">
				Usuario
			</label>
			<input class="w3-input w3-border " type="text" name="usuario">
		</p>
		<p>
			<label class="w3-label">Password</label>
			<input class="w3-input w3-border" type="password" name="pas">
		</p>
		<p>
			<input type="hidden" name="entrar" value="entrar">
			<button class="w3-btn w3-blue">Aceptar</button>
		</p>
		<p>Si aún no tienes cuenta ve al siguiente link <a href="registrarse.php">Registrarse</a></p>
	</form>
<footer>
	<div class="w3-container w3-black">
		<h4>BIBLIOTECA VIRTUAL DATW 2018</h4>
	</div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript"></script>
</body>
</html>
