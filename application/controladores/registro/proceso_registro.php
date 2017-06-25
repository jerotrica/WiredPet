<HTML>

	<HEAD>
	
	</HEAD>

	<BODY>

		

		<?php
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$usuario=$_POST["usuario"];
		$clave=$_POST["clave"];
		$fecha=$_POST["fecha"];
		$telefono=$_POST["telefono"];
		$domicilio=$_POST["domicilio"];
		$mail=$_POST["mail"];
		$sexo=$_POST["sexo"];
		
		require("../../modelo/bbdd/consulta.php");//llamada al archivo que contiene la clase consulta
	
		$consulta=new consulta();//instancia la clase consulta

		//===============codigo para hacer un INSERT================================
		/*function validarUsuario() {
		$sql="select ". $usuario." from login";

		$queryResult=$consulta->getRegistros($sql);

			if (mysqli_num_rows($queryResult)>0) {
				return true;
			}else{
				   return false;
			}

		}*/

		


		$insert="insert into usuarios (Nombre,Apellido,Mail,Telefono,Sexo,FechaNac,Domicilio)
		values('$nombre','$apellido','$mail','$telefono','$sexo','$fecha','$domicilio');";//se crea la variable $insert (que contiene la query) y se pasará como parametro. 
		$insertResult=$consulta->insertRegistros($insert);//llamada al metodo "insertRegistro" de la clase consulta 

		$insert="insert into login (Usuario,Clave)
		values('$usuario',MD5('$clave'));";//se crea la variable $insert (que contiene la query) y se pasará como parametro. 
		$insertResult=$consulta->insertRegistros($insert);//llamada al metodo "insertRegistro" de la clase consulta 

		if ($insertResult==true) {
			echo "error";

		}else{
			header("location: /../../../vistas/miCuenta.php");
			msqli_close($consulta->conexion_db);
		}
		?>

	</BODY>

</HTML>