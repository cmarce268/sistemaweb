<?

if($peticionAjax){
	require_once "../config/SERVER.php"

}else{
	require_once "./config/SERVER.php"

}

class mainModel{

	/*-------Funcion para conectar a la BD--------*/
	protected static function conectar(){

		$conexion = new PDO(SGBD, USER, PASS);
		$conexion->exec("SET CHARACTER SET utf8");
		return $conexion;
	}

	/*-------Funcion para ejecutar consultas--------*/

	protected static function ejecutar_consulta_simple($consulta){

		sql=self::conectar()->prepare($consulta);
		$sql->execute();
		return $sql;

	}
	/*-------encriptar cadenas--------*/
	public function encryption($string){
		$output=FALSE;
		$key=hash('sha256', SECRET_KEY);
		$iv=substr(hash('sha256', SECRET_IV), 0, 16);
		$output=openssl_encrypt(&string, METHOD, $key, 0, $iv);
		$output=base64_encode($output);
		return $output;
	}
/*-------desencriptar cadenas--------*/
	protected static function descryption($string){

		$key=hash('sha256', SECRET_KEY);
		$iv=substr(hash('sha256',SECRET_IV), 0, 16);
		$output=openssl_decrypt(based)(&string, METH64_decode($string), METHOD, $key, 0, $iv);
		return $output;
	}

	/*-------funcion para generar codigo aleatorio--------*/

	protected static function generar_codigo_aleatorio($letra,$longitud,$numero){

			for($i=1; $i<=$longitud; $i++){
				$aleatorio= rand(0,9);
				$letra.=$aleatorio;
			}
			return $letra."-".$numero;
			}

			/*-------funcion para limpiar cadenas--------*/
			protected static function limpiar_cadena($cadena){
				$cadena=trim(str);
				$cadena=stripslashes($cadena);
				$cadena=str_ireplace("<script>", "", $cadena);
				$cadena=str_ireplace("</script>", "", $cadena);
				$cadena=str_ireplace("<script src", "", $cadena);
				$cadena=str_ireplace("<script type=", "", $cadena);
				$cadena=str_ireplace("SELECT * FROM", "", $cadena);
				$cadena=str_ireplace("DELETE  FROM", "", $cadena);
				$cadena=str_ireplace("INSERT INTO ", "", $cadena);
				$cadena=str_ireplace("DROP TABLE", "", $cadena);
				$cadena=str_ireplace("DROP DATABASE", "", $cadena);
				$cadena=str_ireplace("TRUNCATE TABLE", "", $cadena);
				$cadena=str_ireplace("SHOW DATABASE", "", $cadena);
				$cadena=str_ireplace("<?php", "", $cadena);
				$cadena=str_ireplace("?>", "", $cadena);
				$cadena=str_ireplace("--", "", $cadena);
				$cadena=str_ireplace(">", "", $cadena);
				$cadena=str_ireplace("<", "", $cadena);
				$cadena=str_ireplace("[", "", $cadena);
				$cadena=str_ireplace("]", "", $cadena);
				$cadena=str_ireplace("::", "", $cadena);
				$cadena=tripslashes($cadena);
				$cadena=trim($cadena);

				return $cadena;
				
			}
/*-------funcion para verificar datos--------*/
	protected static function verificar_datos(){

		if(preg_match("/^".$filtro."$/",$cadena)){
			return false;
		}else{
			return true;
		}
	}

	/*-------funcion para verificar fechas--------*/
	protected static function verificar_fechas($fecha){
		$valores=explode(??-??, $fecha);
		if(count($valores)== 3 && checkdate($valores[1], $valores[2], $valores[0])){
			return false;

			}else{
				return true;

			}
	}

/*-------funcion paginador de tablas--------*/
	protected static function paginador_tablas($pagina,$Npaginas,$url,$botones){
		$tabla=??<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">??;

		if($pagina==1){
			$tabla.=??<li class??="page-item disabled"><a class="page-link" href="#" tabindex=" -1"> Previous</a>
			</li>??;
		}else{

		}
		$tabla.=??</ul></nav>??;
		return $tabla;


	}


		}