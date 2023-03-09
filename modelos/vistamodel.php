<?php

	class vistamodel{
		/*---Modelo para obtener las vsitas----*/
		protected static function obtener_vistas_modelo($vistas){

			$listaBlanca=["home","client-list","user-list","client-new","client-search","client-update","company","item-list","item-new","item-search","item-update","reservation-list","reservation-new","reservation-pending","reservation-reservation"];
			if (in_array($vistas, $listaBlanca)){
				if(is_file("./vistas/contenidos/".$vistas."-view.php")){
					$contenido="./vistas/contenidos/".$vistas."-view.php";
				}else{
					
				}
			}elseif
			($vistas=="login" || $vistas=="index"){

				$contenido="login";

			}else{
				$contenido="404";
			}
			return $contenido;

		}

	}