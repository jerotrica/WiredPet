
<?php
//acceso a la tabla y devolucion de registros
	require("conexion.php");//llamada al archivo que establece la conexion

	class Consulta extends Conexion{//hereda de la clase Conexion

		 function __construct(){//constructor de la clase Consulta

			parent::__construct();//llama al constructor de la clase padre (clase Conexion)


		}

		public function getRegistros($sql){ //metodo que hace la consulta y devuelve resultado. Se le debe pasar la consulta por parametro "($sql)".

			$resultado=$this->conexion_db->query($sql);//guarda registros en "$resultado"
			

			return $resultado;

			/*==================//tutorial youtube, en este caso el query se escribe en el metodo, en el del profe se pasan por parametros desde la pag "index"

			$resultado=$this->conexion_db->query('select * from usuarios');
			$registros=$resultado->fetch_all(MYSQLI_ASSOC);
			======================================================================*/

		}


		public function insertRegistros($insert){ //metodo que hace la consulta y devuelve resultado. Se le debe pasar la consulta por parametro "($sql)".

			$resultadoINS=$this->conexion_db->query($insert);//guarda registros en "$resultado"
			//return $resultado;
			

			

		}


	}



?>

