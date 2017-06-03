<?php
session_start();

echo "hola login";

require "../../modelo/bbdd/consulta.php";

		function validarlogin() {
		
		$user = $_POST['user'];
		$password = $_POST['password'];
		
		
		$consulta=new consulta();//instancia la clase consulta

		$sql="SELECT * FROM Login 
			  WHERE Usuario='".$user."'
			  AND
			  Clave='".md5($password)."'";//se crea la variable $sql (que contiene el select) y se pasará como parametro. 
			  
		$queryResult=$consulta->getRegistros($sql);//llamada al metodo "getRegistro" de la clase consulta 
		
		//$fila=$queryResult->fetch_assoc();
		//$row=mysqli_num_rows($queryResult);
		/*echo "<br>".$fila['Usuario'];
		
		echo "<br>".$fila['Clave'];
		echo "<br>".$row;*/
		
		/*while ($fila=$queryResult->fetch_assoc()) {
			
			echo "<br>".$fila['Usuario'];
			echo "<br>".$fila['Clave'];
			
		}*/
		
			if(mysqli_num_rows($queryResult)>0){
				
				return true;
				
			}else{
				return false;
		}
		}
		if(validarlogin()){
			
				$_SESSION['nick'] = 1;	
				header("Location:../../vistas/miCuenta.html"); // si el select devuelve un row se inincia sesion y se pasa a "logueado.php"
				
			}else{
					header("Location:../../vistas/errorLogin.html");// si no se pasa a una pagina que informa del problema
					session_destroy();
			}

?>