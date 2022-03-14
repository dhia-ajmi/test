<?php
	include '../Controller/Rendez_vousC.php';
	$rendez_vousC=new Rendez_vousC();
	$rendez_vousC->trier_rv($_GET["id_rv"]);
	header('Location:rv.php');
?>

