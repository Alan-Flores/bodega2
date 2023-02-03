<?php

if ($_GET['sal']=='si') {

	session_start();
	session_destroy();
    header("Location:../../index.php?p=login");
}
?>
