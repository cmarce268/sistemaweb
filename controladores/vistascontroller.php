<?php
  
  require_once "./modelos/vistamodel.php";

  class vistascontroller extends vistamodel{

  	/*---Controlador para obtener la plantilla----*/
  	public function obtener_plantilla_controlador(){

  		return require_once"./vistas/plantilla.php";
  	}

  	/*---Controlador para obtener vistas----*/
  	public function obtener_vistas_controlador(){
  		if (isset($_GET['view'])){
  			$ruta=explode("/", $_GET['view']);
  			$respuesta=vistamodel::obtener_vistas_modelo($ruta[0]);

  		}else{
  			$respuesta="login";

  		}
  		return $respuesta;
  	}
  }
