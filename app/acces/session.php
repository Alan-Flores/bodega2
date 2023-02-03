<?php
	session_start();

	if(!$_SESSION["activo"]){
		header("Location:../app/acces/out.php?sal=si");
	}
?>