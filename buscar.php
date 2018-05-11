<?php

$conexion=false;
//Conexion local
$host="localhost";
$dbname="biblioteca";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$dbname";
try{
  $conexion = new PDO( $dsn, $user, $pass);
  }catch(PDOException $error){
  echo "ERROR DE CONEXIÓN:".$error->getMessage();
}

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset='utf-8'>
<head>
<body>

<form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
    <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
</form>

</body>
</html>
