<HTML>

	<HEAD>
	
	</HEAD>

	<BODY>


		
		<?php

		include '../../helper/sesion.php';

		$formPost=$_POST["formPost"];
		
		//recepcion de datos del archivo subido en el post del usuario
		$nombreArchivo=$_FILES['archivo']['name'];
		$tipoArchivo=$_FILES['archivo']['type'];
		$sizeArchivo=$_FILES['archivo']['size'];

		
		$user=$_SESSION['usuario'];//guardo nombre de usuario
			
		
		
		//ruta de la carpeta destino del servidor
		$carpetaDestino=$_SERVER['DOCUMENT_ROOT'].'../../upload/';

		//mover archivo del directorio temporal del sistema del usuario al servidor
		move_uploaded_file($_FILES['archivo']['tmp_name'], $carpetaDestino.$nombreArchivo);

		

		
		
		require("../../modelo/bbdd/consulta.php");//llamada al archivo que contiene la clase consulta
	
		$consulta=new consulta();//instancia la clase consulta

		$sql="SELECT idLOGIN FROM Login 
			  WHERE Usuario='".$user."'"; //select para capturar el dato "idLOGIN"(que es igual a "idUSUARIO") que se insertara en la tabla "MASCOTA"
        
        $queryResult=$consulta->getRegistros($sql);//llamada al metodo "getRegistros()" para traer el dato solicitado
        
        $campo=$queryResult->fetch_assoc();
        
        $idUSUARIOS= $campo['idLOGIN'];

        mkdir($carpetaDestino.$campo['idLOGIN']);

        $pathPerfil=$carpetaDestino.$campo['idLOGIN']."/";

        $pathArchivo= '../../upload/'.$campo['idLOGIN']."/".$nombreArchivo;

        echo "<br>".$pathArchivo;
        echo "<br>".$pathPerfil.$nombreArchivo;

        move_uploaded_file($_FILES['archivo']['tmp_name'], $pathPerfil.$nombreArchivo);


        
        echo "<br>".$pathPerfil;
     
		//===============codigo para hacer un INSERT===============================
		
		


		$insert="insert into publicacion (TEXTO,MULTIMEDIA)
		values('$formPost','$pathArchivo');";//se crea la variable $insert (que contiene la query) y se pasará como parametro. 
		$insertResult=$consulta->insertRegistros($insert);//llamada al metodo "insertRegistro" de la clase consulta 

		

		/*if ($insertResult==true) {
			echo "error";

		}else{
			header("location:/application/vistas/miCuenta.php");
			msqli_close($consulta->conexion_db);
		}*/
		?>

	</BODY>

</HTML>