  <?php
  /**Cargo conexion a la base de datos**/
    require_once('bd.php');

    /**ZONA DE RECUPERACION DE CAMPOS DEL FORMUARIO**/
    $isbn=$_POST['isbn'];
    $titulo=$_POST['titulo'];
    $anno_publicacion=$_POST['anno_publicacion'];
    $cod_editorial=$_POST['cod_editorial'];
    $anno_edicion=$_POST['anno_edicion'];
    $anno_edicion=explode("-",$anno_edicion)[0];
    $anno_publicacion=explode("-",$anno_publicacion)[0];

    /**FIN DE ZONA**/

    /**ZONA DE INSERCION EN LA BD**/
    try{
    $sql="INSERT INTO libro
            (isbn, titulo,
            anno_publicacion,
            cod_editorial,
            anno_edicion)
          VALUES('$isbn',
            '$titulo',
            $anno_publicacion,
            $cod_editorial,
            $anno_edicion)";
    //echo $sql;
    $numero=$conexion->exec($sql);
    echo $conexion->errorInfo()[2];
    echo "   ".$numero." LIBROS INSERTADOS";
  }catch(PDOException $error){
    echo $error->getMessage();
  }
   ?>
