<HTML>

	<HEAD>
	
	</HEAD>

	<BODY>


		
		<?php
		if (is_null($_SESSION['userName'])) {
			$user =$_SESSION['usuario'];
		}
		else{
			$user =$_SESSION['userName'];
		}
		



		require("application/../../modelo/bbdd/consultaII.php");//llamada al archivo que contiene la clase consulta
		



		$consulta=new consulta();//instancia la clase consulta

//----------------busca idUSUARIOS-----------------------------------
		$sql="SELECT idLOGIN FROM Login 
			  WHERE Usuario='".$user."'"; //select para capturar el dato "idLOGIN"(que es igual a "idUSUARIO") que se insertara en la tabla "MASCOTA"
        
        $queryUser=$consulta->getRegistros($sql);//llamada al metodo "getRegistros()" para traer el dato solicitado
        
        $campo=$queryUser->fetch_assoc();
        
        $idUSUARIOS= $campo['idLOGIN'];

        
//-------------------------------------------------------------------





		$sql="SELECT * FROM MASCOTA WHERE idUSUARIOS='".$idUSUARIOS."'";

		$queryResult=$consulta->getRegistros($sql);



	
		
			$fila=$queryResult->fetch_assoc();

			$nombrePerfil=$fila['NOMBRE'];
			$fotoPerfil=$fila['FOTOPERFIL'];
			$sexoPerfil=$fila['SEXO'];
			$razaPerfil=$fila['RAZA'];
			$sizePerfil=$fila['TAMANO'];


		?>
		

		

	</BODY>

</HTML>