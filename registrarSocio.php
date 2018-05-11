  <?php
  /**Cargo conexion a la base de datos**/
    require_once('bd.php');

    /**ZONA DE RECUPERACION DE CAMPOS DEL FORMUARIO**/
    $cod_persona=$_POST['cod_persona'];
    $dni=$_POST['dni'];
    $telefono=$_POST['telefono'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];

    /**FIN DE ZONA**/

    /**ZONA DE INSERCION EN LA BD**/
    try{
    $conexion->query("INSERT INTO persona
          (cod_persona,dni,
          telefono,
          nombre,
          apellidos)
        VALUES($cod_persona,
          '$dni',
          '$telefono',
          '$nombre',
          '$apellidos')");
    echo "SOCIO AGREGADO";
  }catch(PDOException $error){
    echo $error->getMessage();
  }
   ?>
