<?php
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
				session_start();
				$_SESSION["userName"] = null;
				$_SESSION["autentic"] = true;
				$_SESSION['usuario']=$_REQUEST['user'];
				$_SESSION['pass']=$_REQUEST['password'];
				header("Location: ../application/../../vistas/miCuenta.php"); // si el select devuelve un row se inincia sesion y se pasa a "logueado.php"
				
			}else{
					header("Location: ../application/../../vistas/errorLogin.php");// si no se pasa a una pagina que informa del problema
					session_destroy();
			}

?>