<HTML>

	<HEAD>
	
	</HEAD>

	<BODY>


		
		<?php

        include '../../helper/sesion.php';

		$nombrePet=$_POST["nombre"];
        $tipo=$_POST["tipo"];
        $raza=$_POST["raza"];
        $sizePet=$_POST["sizePet"];
        $sexoPet=$_POST["sexoPet"];
        
		
		//recepcion de datos del archivo subido en el post del usuario
		$nombreArchivo=$_FILES['perfil']['name'];
		$tipoArchivo=$_FILES['perfil']['type'];
		$sizeArchivo=$_FILES['perfil']['size'];

		$user=$_SESSION['usuario'];//guardo nombre de usuario
        
        
		
			
		
		
		//ruta de la carpeta destino del servidor
		$carpetaDestino=$_SERVER['DOCUMENT_ROOT'].'../../upload/';

		

		
		
		require("../../modelo/bbdd/consulta.php");//llamada al archivo que contiene la clase consulta
	
		$consulta=new consulta();//instancia la clase consulta

		//========codigo para interactuar con la BBDD===============================
		
		$sql="SELECT idLOGIN FROM Login 
			  WHERE Usuario='".$user."'"; //select para capturar el dato "idLOGIN"(que es igual a "idUSUARIO") que se insertara en la tabla "MASCOTA"
        
        $queryResult=$consulta->getRegistros($sql);//llamada al metodo "getRegistros()" para traer el dato solicitado
        
        $campo=$queryResult->fetch_assoc();
        
        $idUSUARIOS= $campo['idLOGIN'];
        
        
        echo "<br>".$campo['idLOGIN'];
        echo "<br>".$user;
        echo "<br>".$idUSUARIOS;
        echo "<br>".$pathArchivo;

        mkdir($carpetaDestino.$campo['idLOGIN']);//crea directorio para el perfil ese
        mkdir($carpetaDestino.$campo['idLOGIN']."/FOTOPERFIL/"); //crea directorio para foto del perfil de ese perfil
        $pathPerfil= $carpetaDestino.$campo['idLOGIN']."/FOTOPERFIL/";
            
        $pathArchivo= '../../upload/'.$campo['idLOGIN']."/FOTOPERFIL/".$nombreArchivo;
        echo "<br>".$pathArchivo;
        //mover archivo del directorio temporal del sistema del usuario al servidor
		move_uploaded_file($_FILES['perfil']['tmp_name'], $pathPerfil.$nombreArchivo);
        
        echo $pathPerfil.$nombreArchivo;

		$insert="insert into mascota (FOTOPERFIL,TIPOMASCOTA,RAZA,SEXO,NOMBRE,TAMANO,idUSUARIOS)
		values('$pathArchivo','$tipo','$raza','$sexoPet','$nombrePet','$sizePet','$idUSUARIOS');";//se crea la variable $insert (que contiene la query) y se pasará como parametro. 
		$insertResult=$consulta->insertRegistros($insert);//llamada al metodo "insertRegistro" de la clase consulta 

		

		if ($insertResult==true) {
			echo "error";

		}else{
			header("Location: ../application/../../vistas/miCuenta.php");
			msqli_close($consulta->conexion_db);
		}
		?>

	</BODY>

</HTML>