<?php
	
	require_once "./config/APP.php";
	require_once "./controladores/vistascontroller.php";

	$plantilla = new vistascontroller();
	$plantilla->obtener_plantilla_controlador();