
<?php
	require("application/../../config/config.php");//llama al archivo que contiene los parametros para conectarse
	//echo "hola soy conexion";
	class Conexion{//clase conexion 

		protected $conexion_db;//aca se guardara la conexion


		 function __construct(){//constructor de la clase

			$this->conexion_db=new mysqli(DB_HOST,DB_USUARIO,DB_PASS,DB_NOMBRE);//se establece conexion. aca no entiendo porque se usa solo "mysqli" y no funciona con "mysql_connect"

			if($this->conexion_db->connect_errno){//condicieonal por si falla la conexion

				"error al conectar a la BBDD: " .  $this->conexion_db->connect_error;

				return;

			} 

			$this->conexion_db->set_charset(DB_CHARSET); //para que soporte caracteres latinos


		}


	}




?>
