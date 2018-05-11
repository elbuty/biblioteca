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

  /***A partir de aqui son pruebas***/
  /*$sql = "SELECT * FROM country";
  $resultado=$conexion->query($sql);
  foreach ($resultado as $fila){
    echo $fila['Name'];
  }*/
  /*$sql = "SELECT * FROM country WHERE population>?";
  $consulta = $conexion->prepare($sql);
  $consulta->bindValue(1,30000000,PDO::PARAM_INT);
  $consulta->execute();
  $resultado = $consulta->fetchAll();
  foreach ($resultado as $fila){
    echo $fila['Name'];
  }*/
  /*$conexion->beginTransaction();
  $conexion->exec("INSERT INTO editorial (nombre) VALUES ('Editoriales Pepe')")
  $conexion->exec("INSERT INTO editorial (nombre) VALUES ('Editoriales Pepe')")
  $conexion->rollback();
  $conexion->commit();
  if ($numero>=0){
    echo "no se insertó debido a un fallo";
  }else {
    echo "registrado con éxito";
  }*/

    /**FIN DE PRUEBAS**/
 ?>
