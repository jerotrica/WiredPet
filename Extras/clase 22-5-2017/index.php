<HTML>

<HEAD>
	
</HEAD>

<BODY>
	<!--================formulario para probar el insert en la base==========-->
	<form name="form1" method="POST" action="proceso_insert.php">
		
		<input type="text" name="nombre" placeholder="nombre">
		<input type="text" name="apellido" placeholder="apellido">
		<input type="text" name="coor" placeholder="coor">
		<input type="text" name="mail" placeholder="mail">
		<input type="text" name="telefono" placeholder="telefono">
		<input type="text" name="sexo" placeholder="sexo">
		<input type="text" name="fecha" placeholder="fecha">
		<input type="text" name="domicilio" placeholder="domicilio">
		<input type="submit" name="enviar" id="enviar" value="Enviar">
	</form>

<?php

//===============codigo para hacer un SELECT================================
require "consulta.php";//llamada al archivo que contiene la clase consulta
	
	$consulta=new consulta();//instancia la clase consulta

	$sql="select * from usuarios";//se crea la variable $sql (que contiene el select) y se pasará como parametro. 
	$queryResult=$consulta->getRegistros($sql);//llamada al metodo "getRegistro" de la clase consulta 


	

//===============impresion del SELECT================================
	while ($fila=$queryResult->fetch_assoc()) {//impresion de lo que devuelve la consulta
		echo "================================================================";
		echo "<br>";
		echo " | ";
		echo $fila['idUSUARIOS']." | ";
		echo $fila['Nombre']." | ";
		echo $fila['Apellido']." | ";
		echo $fila['Mail']." | ";
		echo $fila['Coordenadas']." | ";
		echo $fila['Telefono']." | ";
		echo $fila['Sexo']." | ";
		echo $fila['FechaNac']." | ";
		echo $fila['Domicilio']." | ";
		echo "<br>";
		echo "================================================================";
		echo "<br>";
	}




//======================codigo para insertar===================
	//require "insert.php";//llamada al archivo que contiene la clase consulta
	
	
	/*$sql="insert into usuarios (Nombre,Apellido,Coordenadas,Mail,Telefono,Sexo,FechaNac,Domicilio)
		values('daniel','jota','23456789','jota@mail.com','15654564','m','546546975','calle otra nro 6546 caba')";*/


?>

<?php
/*===============tutorial youtube para consulta la unica dif es que el select no se pasa como parametro desde esta pagina y que el bucle del echo es con foreach==================
	require "consulta.php";//llama al archivo del query

	$queryResult=new Consulta();//crea instancia de la clase

	$arrayRegistros=$queryResult->getRegistros();//le decimos que almacene aqui lo que devuelve


	 foreach ($arrayRegistros as $fila){


		echo "=========================================================";
		echo "<br>";
		echo $fila['idUSUARIOS']."| ";
		echo $fila['Nombre']."| ";
		echo $fila['Apellido']."| ";
		echo $fila['Mail']."| ";
		echo $fila['Telefono']."| ";
		echo $fila['Sexo']."| ";
		echo $fila['FechaNac']."| ";
		echo $fila['Domicilio']."| ";
		echo "<br>";
		echo "=========================================================";
		echo "<br>";

	}*/

?>

</BODY>





</HTML>