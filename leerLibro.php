<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles\styles.css">
  <title>Bilioteca Virtual</title>

</head>
<body>

  <?php
  /*********Acceso a MySQL según PDO*********/
    $conexion=false;
    //Conexion local
    $host="localhost";
    $dbname="biblioteca";
    $user = "root";
    $pass = "";
  //Coneixon remota del profe
    //$host="rdbms.strato.de";
    //$dbname="DB3334152";
    //$user = "U3334152";
    //$pass = "arr1quitaun";

    $dsn = "mysql:host=$host;dbname=$dbname";
    try{
      $conexion = new PDO( $dsn, $user, $pass);
    }catch(PDOException $error){
      echo "ERROR DE CONEXIÓN:".$error->getMessage();
    }
    $sql = "SELECT * FROM libro";
    $consulta = $conexion->prepare($sql);
    $consulta->execute();
    $resultado = $consulta->fetchAll();
      include("header.php");
      echo "<table align= 'left' border='3' width='100%'>";
      echo "<tr>";
      echo "<th>ISBN</th>";
      echo "<th>Título</th>";
      echo "<th>Año de Publicación</th>";
      echo "<th>Cod. Editorial</th>";
      echo "<th>Año de Edición</th>";
      echo "</tr>";
    foreach ($resultado as $fila){
      echo "<tr>
              <td>".$fila['isbn']."</td>
              <td>".$fila['titulo']."</td>
              <td>".$fila['anno_publicacion']."</td>
              <td>".$fila['cod_editorial']."</td>
              <td>".$fila['anno_edicion']."</td>
            </tr>";
      }
      echo "</table>";
  echo "<br><br><br>Gracias por usar El Buty Soft";

   ?>

<script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript"></script>
</body>
</html>
