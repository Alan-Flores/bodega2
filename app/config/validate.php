<?php

    include('database.php');
    
	$user = $_POST['user'];
	$pass = md5($_POST['password']);

	$search = "SELECT * FROM user WHERE user = '$user' AND password = '$pass' ";
	$ejecutar = $mysqli -> query($search) or die ('Datos no encontrados.');
	$resul = mysqli_num_rows($ejecutar);

	if ($resul>0){
		session_start();
		$_SESSION['activo'] = true;
		$_SESSION['usuario'] = $user;

		$charge = "SELECT charge_id FROM user WHERE user = '$user' ";
		$charge_id = $mysqli -> query($charge);


		$fila = $charge_id->fetch_row();
		$cargo = $fila[0];

		if($cargo == 2){

			header("Location:../../index.php?p=bodeguero");

		}else if ($cargo == 1){

			header("Location:../../index.php?p=administrador");
		}

	}else{

		header("Location:../../index.php?p=error");
    }
