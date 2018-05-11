<?php
/**Cargo conexion a la base de datos**/
  require_once("bd.php");

  /**ZONA DE RECUPERACION DE CAMPOS DEL FORMUARIO**/


  /**FIN DE ZONA**/

  /**ZONA DE INSERCION EN LA BD**/
  try{
  $conexion->query("INSERT INTO editorial(nombre)
                    VALUES('".$_POST['editorial']."')");
  echo "INSERCION REALIZADA";
}catch(PDOException $error){
  echo $error->getMessage();
}
 ?>
