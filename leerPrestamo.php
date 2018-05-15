  <?php
    include("header.php");
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
    $sql = "SELECT * FROM prestamo";
    $consulta = $conexion->prepare($sql);
    $consulta->execute();
    $resultado = $consulta->fetchAll();
      include("header.php");
      echo "<table align= 'left' border='3' width='100%'>";
      echo "<tr>";
      echo "<th>Cod. Préstamo</th>";
      echo "<th>Fecha de Realización</th>";
      echo "<th>Fecha de Devolución</th>";
      echo "<th>Cod. de Persona</th>";
      echo "</tr>";
    foreach ($resultado as $fila){
      echo "<tr>
              <td>".$fila['cod_prestamo']."</td>
              <td>".$fila['fecha_realizacion']."</td>
              <td>".$fila['fecha_devolucion']."</td>
              <td>".$fila['cod_persona']."</td>
            </tr>";
      }
      echo "</table>";
  echo "<br><br><br>Gracias por usar El Buty Soft";

   ?>
