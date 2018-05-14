  <?php
  /**Cargo conexion a la base de datos**/
    require_once('bd.php');

    /**ZONA DE RECUPERACION DE CAMPOS DEL FORMUARIO**/
    $cod_prestamo=$_POST['cod_prestamo'];
    $fecha_realizacion=$_POST['fecha_realizacion'];
    $fecha_devolucion=$_POST['fecha_devolucion'];
    $cod_persona=$_POST['cod_persona'];


    /**FIN DE ZONA**/

    /**ZONA DE INSERCION EN LA BD**/
    try{
    $sql="INSERT INTO libro
            (cod_prestamo,
            fecha_realizacion,
            fecha_devolucion,
            cod_persona)
          VALUES($cod_prestamo,
            $fecha_realizacion,
            $fecha_devolucion,
            $cod_editorial,
            $cod_persona)";
    //echo $sql;
    $numero=$conexion->exec($sql);
    echo $conexion->errorInfo()[2];
    echo "   ".$numero." LIBROS INSERTADOS";
  }catch(PDOException $error){
    echo $error->getMessage();
  }
   ?>
