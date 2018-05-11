/*<?php
	class Db{
		private static $conexion=null;
		private function_construct(){}
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion=new PDO('mysql:host=localhost;
															dbname=baselogin',
															'root',
															'',
															$pdo_options);
			return self::$conexion;
		}
	}*/
	<?php
	/*********Acceso a MySQL según PDO*********/
	  $conexion=false;
	  //Conexion local
	  $host="localhost";
	  $dbname="baselogin";
	  $user = "root";
	  $pass = "";

		$dsn = "mysql:host=$host;dbname=$dbname";
	  try{
	    $conexion = new PDO( $dsn, $user, $pass);
	    }catch(PDOException $error){
	    echo "ERROR DE CONEXIÓN:".$error->getMessage();
	  }
?>
