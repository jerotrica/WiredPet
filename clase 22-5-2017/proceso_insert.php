<HTML>

	<HEAD>
	
	</HEAD>

	<BODY>

		

		<?php


		$nombre=$_POST["nombre"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$coor=$_POST["coor"];
		$mail=$_POST["mail"];
		$telefono=$_POST["telefono"];
		$sexo=$_POST["sexo"];
		$fecha=$_POST["fecha"];
		$domicilio=$_POST["domicilio"];




		require "consulta.php";//llamada al archivo que contiene la clase consulta
	
		$consulta=new consulta();//instancia la clase consulta




		//===============codigo para hacer un INSERT================================

		$insert="insert into usuarios (Nombre,Apellido,Coordenadas,Mail,Telefono,Sexo,FechaNac,Domicilio)
		values('$nombre','$apellido','$coor','$mail','$telefono','$sexo','$fecha','$domicilio');";//se crea la variable $insert (que contiene la query) y se pasará como parametro. 
		$insertResult=$consulta->insertRegistros($insert);//llamada al metodo "insertRegistro" de la clase consulta 

		if ($insertResult==true) {
			echo "error";

		}else{
			header("location:index.php");
			msqli_close($consulta->conexion_db);
		}


		


		?>






	</BODY>





</HTML>