<?php 
	session_start();

  if(!$_SESSION["autentic"]){
    header("Location:index.php ");
  } 

 ?>